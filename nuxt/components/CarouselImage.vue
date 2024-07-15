<template>
    <div class="sm:mb-4 flex flex-col items-center relative 3xsphone:left-1/2 md:left-0 3xsphone:-translate-x-1/2 md:-translate-x-0 whitespace-nowrap md:flex-1 w-10/12" ref="carouselRef">
        <!-- <div class="relative">
            <div class="absolute h-1 bg-black"></div>
        </div> -->
        <img :src="props.images[0]" alt="" ref="mainImageRef" class="object-contain 3xsphone:rounded-md sm:rounded-lg md:rounded-xl w-full">
        <div class="relative flex gap-5">
            <button class="bg-red-500 " @click="nextCarousel()"> next</button>
            <button class="bg-red-500 " @click="prevCarousel()"> previous</button>
        </div>
        <!-- <div class="flex gap-1.5 mt-1 w-1/2 scrollable-container" ref="scrollableContainer" @mousedown="handleScrollEvent" @mousemove="handleScrollEvent" @mouseup="handleScrollEvent" @mouseleave="handleScrollEvent"> -->
        <div class="flex gap-1.5 mt-1 w-1/2 scrollable-container relative" ref="scrollableContainer">
            <div class="border-white border-2 absolute left-1/2 -translate-x-1/2 h-full" style="width: calc((100% - 2 * 10px) / 3);"></div>
            <template v-for="(item, index) in props.images" :key="index">
                <img :src="item" alt="" @click="updateImage(item, index)" ref="caItemRef" class="pointer-events-auto object-contain w-1/3 rounded-md border-3 border-transparent hover:border-primary dark:hover:border-primary_dark" draggable="false">
            </template>
        </div>
    </div>
</template>
<style scoped>
.middle-item{
    border-color: green;
}
.scrollable-container{
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    -ms-overflow-style: none;
}
.scrollable-container::-webkit-scrollbar {
    width: 0;
    display: none;
}
</style>
<script setup>
import { ref } from 'vue';
const { $gsap, $Draggable } = useNuxtApp();
const mainImageRef = ref(null);
const scrollableContainer = ref(null);
const caItemRef = ref([]);
const local = reactive({
    // isDragging: false,
    // startX: 0,
    // scrollLeft: 0,
    isActiveIndex: 0,
});
const props = defineProps({
    images:Object,
});
// const updateImage = (item, index) => {
//     mainImageRef.value.src = item;
//     const cl = $gsap.timeline();
//     local.isActiveIndex = index;
// }
let loop = null;
onUpdated(() => {
    nextTick(() => {
        loop = horizontalLoop($gsap.utils.toArray(caItemRef.value), {paused: true, draggable: true});
    })
});
const nextCarousel = () => {
    if(loop != null){
        loop.next({duration: 0.4, ease: "power1.inOut"})
    }
}
const prevCarousel = () => {
    if(loop != null){
        loop.previous({duration: 0.4, ease: "power1.inOut"})
    }
}
const updateImage = (item, index) => {
    loop.toIndex(index, {duration: 0.8, ease: "power1.inOut"})
    mainImageRef.value.src = item;
}
const horizontalLoop = (items, config) => {
    function setMiddle(currentIndex, totalItems, visibleItems) {
        items.forEach(box => box.classList.remove("middle-item"));
        items[(currentIndex + Math.floor(visibleItems / 2)) % totalItems].classList.add("middle-item");
        console.log('Setting middle item at index:', (currentIndex + Math.floor(visibleItems / 2)) % totalItems);
    }
	config = config || {};
    const maxItem = 3; //max item must be show inside container
    config.alignThreshold = config.alignThreshold || 0.25; // Default to 50% if not specified
    config.midMarker = config.midMarker || {state:false,color:'black',}; //config for marker
	let tl = $gsap.timeline({repeat: config.repeat, paused: config.paused, defaults: {ease: "none"}, onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100)}),
		length = items.length,
		startX = items[0].offsetLeft,
		times = [],
		widths = [],
		xPercents = [],
		curIndex = 0,
		pixelsPerSecond = (config.speed || 1) * 100,
		snap = config.snap === false ? v => v : $gsap.utils.snap(config.snap || 1),// some browsers shift by a pixel to accommodate flex layouts, so for example if width is 20% the first element's width might be 242px, and the next 243px, alternating back and forth. So we snap to 5 percentage points to make things look more natural
		populateWidths = () => items.forEach((el, i) => {
            widths[i] = parseFloat($gsap.getProperty(el, "width", "px"));
            xPercents[i] = snap(parseFloat($gsap.getProperty(el, "x", "px")) / widths[i] * 100 + $gsap.getProperty(el, "xPercent"));
        }),
        getTotalWidth = () => items[length-1].offsetLeft + xPercents[length-1] / 100 * widths[length-1] - startX + items[length-1].offsetWidth * $gsap.getProperty(items[length-1], "scaleX") + (parseFloat(config.paddingRight) || 0), totalWidth, curX, distanceToStart, distanceToLoop, item, i;
	populateWidths();
    $gsap.set(items, { // convert "x" to "xPercent" to make things responsive, and populate the widths/xPercents Arrays to make lookups faster.
        xPercent: i => xPercents[i]
    });
    $gsap.set(items, {x: 0});
    totalWidth = getTotalWidth();
    for (i = 0; i < length; i++) {
        item = items[i];
        curX = xPercents[i] / 100 * widths[i];
        distanceToStart = item.offsetLeft + curX - startX;
        distanceToLoop = distanceToStart + widths[i] * $gsap.getProperty(item, "scaleX");
        tl.to(item, {xPercent: snap((curX - distanceToLoop) / widths[i] * 100), duration: distanceToLoop / pixelsPerSecond}, 0)
        .fromTo(item, {xPercent: snap((curX - distanceToLoop + totalWidth) / widths[i] * 100)}, {xPercent: xPercents[i], duration: (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond, immediateRender: false}, distanceToLoop / pixelsPerSecond)
        .add("label" + i, distanceToStart / pixelsPerSecond);
        times[i] = distanceToStart / pixelsPerSecond;
    }
    function toIndex(index, vars) {
        vars = vars || {};
        (Math.abs(index - curIndex) > length / 2) && (index += index > curIndex ? -length : length); // always go in the shortest direction
        let newIndex = $gsap.utils.wrap(0, length, index),
            time = times[newIndex];
        if (time > tl.time() !== index > curIndex) { // if we're wrapping the timeline's playhead, make the proper adjustments
            vars.modifiers = {time: $gsap.utils.wrap(0, tl.duration())};
            time += tl.duration() * (index > curIndex ? 1 : -1);
        }
        curIndex = newIndex;
        vars.overwrite = true;
        return tl.tweenTo(time, vars);
    }
    tl.next = vars => { toIndex(curIndex + 1, vars) && setMiddle(curIndex + 1, length, 3)};
    tl.previous = vars => { toIndex(curIndex - 1, vars) && setMiddle((curIndex + 2) - 1, length, 3)};
    tl.current = () => curIndex;
    tl.toIndex = (index, vars) => toIndex(index, vars);
    tl.updateIndex = () => curIndex = Math.round(tl.progress() * items.length);
    tl.times = times;
    tl.progress(1, true).progress(0, true); // pre-render for performance
    if (config.reversed) {
        tl.vars.onReverseComplete();
        tl.reverse();
    }
    if((typeof(config.midMarker) === 'boolean' && config.midMarker)|| typeof(config.midMarker) === 'object' && config.midMarker.state){
        console.log('parent', items[0].parentNode)
        console.log('parent', items[0].parentElement)
        const parent = items.find((item)=>{
            return item != null || item != undefined;
        }).parentNode;
        let middMarker = parent.createElement("div");
    }
    if (config.draggable) {
        let proxy = document.createElement("div"),
            wrap = $gsap.utils.wrap(0, 1),
            ratio, startProgress, draggable, dragSnap, roundFactor,
            align = () => tl.progress(wrap(startProgress + (draggable.startX - draggable.x) * ratio)),
            syncIndex = () => tl.updateIndex();
        typeof(InertiaPlugin) === "undefined" && console.warn("InertiaPlugin required for momentum-based scrolling and snapping. https://greensock.com/club");
        draggable = $Draggable.create(proxy, {
            trigger: items[0].parentNode,
            type: "x",
            onPress() {
                startProgress = tl.progress();
                tl.progress(0);
                populateWidths();
                totalWidth = getTotalWidth();
                ratio = 1 / totalWidth;
                dragSnap = totalWidth / items.length;
                roundFactor = Math.pow(10, ((dragSnap + "").split(".")[1] || "").length);
                tl.progress(startProgress);
            },
            onDrag: align,
            onThrowUpdate: align,
            snap: value => {
                let n = Math.round(parseFloat(value) / dragSnap) * dragSnap * roundFactor;
                return (n - n % 1) / roundFactor;
            },
            onRelease: () => {
                syncIndex();
                let dragProgress = (draggable.startX - draggable.endX) * ratio;
                let triggerThreshold = config.alignThreshold * widths[curIndex];
                let alignedProgress = startProgress + dragProgress;
                if (Math.abs(dragProgress) > triggerThreshold) {
                    let closest = Math.round(alignedProgress / dragSnap) * dragSnap;
                    alignedProgress = wrap(closest);
                }
                $gsap.to(proxy, {
                    x: 0,
                    duration: 0.2,
                    onUpdate: () => tl.progress(alignedProgress),
                    onComplete: () => {
                        syncIndex();
                        $gsap.to(tl, {
                            time: times[curIndex],
                            duration: 0.2,
                            ease: "power1.inOut",
                            onComplete: () => {
                                setMiddle(curIndex, length, 3);
                            }
                        });
                    }
                });
            }
            // onRelease: () => {
            //     syncIndex();
            //     $gsap.to(proxy, {
            //         x: Math.round(draggable.endX / dragSnap) * dragSnap,
            //         duration: 0.2,
            //         onUpdate: align,
            //         onComplete: () => {
            //             $gsap.set(proxy, {x: 0});
            //             syncIndex();
            //             $gsap.to(tl, {
            //                 time: times[curIndex],
            //                 duration: 0.2,
            //                 ease: "power1.inOut",
            //                 onComplete: () => {
            //                     setMiddle(curIndex, length, 3);
            //                 }
            //             });
            //         }
            //     });
            // },
        })[0];
        tl.draggable = draggable;
    }
	return tl;
}
// const visibleItems = 3; // Update as per your visible items count
// setMiddle(0, boxes.length, visibleItems);

// const handleScrollEvent = (event) => {
//     const container = scrollableContainer.value;
//     if (event.type === 'mousedown') {
//         local.isDragging = true;
//         local.startX = event.pageX - container.offsetLeft;
//         local.scrollLeft = container.scrollLeft;
//         // container.style.cursor = 'grabbing';
//     } else if (event.type === 'mousemove' && local.isDragging) {
//         event.preventDefault();
//         const x = event.pageX - container.offsetLeft;
//         const walk = (x - local.startX) * 2; // Multiply by 2 for faster scrolling
//         container.scrollLeft = local.scrollLeft - walk;
//     } else if (event.type === 'mouseup' || event.type === 'mouseleave') {
//         local.isDragging = false;
//         // container.style.cursor = 'grab';
//     }
// }
</script>