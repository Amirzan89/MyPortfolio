<template>
    <div id="carouselComponent" class="sm:mb-4 flex flex-col items-center relative 3xsphone:left-1/2 md:left-0 3xsphone:-translate-x-1/2 md:-translate-x-0 whitespace-nowrap md:flex-1 w-10/12" ref="carouselRef">
        <div class="relative w-10/12 flex items-center" ref="mainImageLoadingRef" @mouseenter="handleMainImage('enter')" @mouseleave="handleMainImage('leave')" @mousemove="handleMainImage('move')">
            <div ref="arrLeftRef" class="refArr absolute z-10 left-0 flex justify-center items-center h-full 3xsphone:w-5 xl:w-10" :style="{ backgroundColor: useDarkModeStore().darkMode? 'rgba(255, 255, 255, 0.14)' : 'rgba(255, 255, 255, 0.14)', boxShadow: '0 4px 30px rgba(0, 0, 0, 0.1)'}">
                <FontAwesomeIcon icon="fa-solid fa-angle-left" class="3xsphone:text-lg xsphone:text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-5xl text-7xl text-primary_text dark:text-primary_dark cursor-pointer" @click="prevCarousel()"/>
            </div>
            <div>
                <img :src="props.images[0]+''" alt="" ref="mainImageRef" class="relative block object-contain 3xsphone:rounded-md sm:rounded-lg md:rounded-xl">
            </div>
            <div ref="arrRightRef" class="refArr absolute z-10 right-0 flex justify-center items-center h-full 3xsphone:w-5 xl:w-10" :style="{ backgroundColor: useDarkModeStore().darkMode? 'rgba(255, 255, 255, 0.14)' : 'rgba(255, 255, 255, 0.14)', boxShadow: '0 4px 30px rgba(0, 0, 0, 0.1)' }">
                <FontAwesomeIcon icon="fa-solid fa-angle-right" class="3xsphone:text-lg xsphone:text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-5xl text-7xl text-primary_text dark:text-primary_dark cursor-pointer" @click="nextCarousel()"/>
            </div>
            <div class="card-loading items-loading absolute top-0 left-0 w-full h-full 3xsphone:rounded-md sm:rounded-lg md:rounded-xl" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
        </div>
        <ul class="flex gap-1.5 mt-1 w-5/12 scrollable-container relative bg-primary dark:bg-transparent" ref="scrollableContainer" style="transition: var(--darkMode);">
            <template v-for="(item, index) in props.images" :key="index">
                <li ref="caItemLoadingRef" class="flex-shrink-0 relative">
                    <div>
                        <img :src="item+''" alt="" @click="updateImage(item, index)" class="pointer-events-auto relative block object-contain 3xsphone:rounded-sm md:rounded-md 3xsphone:border-3 md:border-3 border-transparent hover:border-primary dark:hover:border-primary_dark" draggable="false">
                    </div>
                    <div class="card-loading items-loadinsg absolute top-0 left-0 z-10 w-full h-full 3xsphone:rounded-sm md:rounded-md" style="animation: 2.5s shine ease-in infinite; animation-delay: 0.25s;"/>
                </li>
            </template>
        </ul>
    </div>
</template>
<style lang="scss" scoped>
.refArr{
    transition: var(--darkMode);
}
.middle-item div img{
    border-color: red;
    &:hover{
        border-color: red;
    }
}
.scrollable-container{
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    -ms-overflow-style: none;
    &::-webkit-scrollbar {
        width: 0;
        display: none;
    }
}
</style>
<script setup>
import { ref } from 'vue';
import { useDarkModeStore } from '~/store/DarkMode';
const { $gsap, $Draggable } = useNuxtApp();
const props = defineProps({
    images:Object,
});
const local = reactive({
    isMainDone: false,
    isItemDone: false,
});
const mainImageRef = ref(null);
const mainImageLoadingRef = ref(null);
const scrollableContainer = ref(null);
const caItemLoadingRef = ref([]);
const arrLeftRef = ref(null);
const arrRightRef = ref(null);
const ratioImg = '16:9';
const maxItemContainer = 3;
const ratioWidth = ratioImg.match(/\d+/g)[0]/ratioImg.match(/\d+/g)[1];
const ratioHeight = ratioImg.match(/\d+/g)[1]/ratioImg.match(/\d+/g)[0];
let loop = null;
const composableInstances = ref({});
const createComposableInstance = (composableType, elementId, composableFactory) => {
    if (!composableInstances.value[composableType]) {
        composableInstances.value[composableType] = {};
    }
    if (!composableInstances.value[composableType][elementId]) {
        composableInstances.value[composableType][elementId] = composableFactory()(elementId, composableType)();
    }
    return composableInstances.value[composableType][elementId];
};
const updateAspectRatio = (el = null) => {
    el = el instanceof Event ? null : el;
    const updateArr = () => {
        arrLeftRef.value.style.height = getComputedStyle(mainImageRef.value).height;
        arrLeftRef.value.style.borderTopLeftRadius = getComputedStyle(mainImageRef.value).borderTopLeftRadius;
        arrLeftRef.value.style.borderBottomLeftRadius = getComputedStyle(mainImageRef.value).borderBottomLeftRadius;

        arrRightRef.value.style.height = getComputedStyle(mainImageRef.value).height;
        arrRightRef.value.style.borderTopRightRadius = getComputedStyle(mainImageRef.value).borderTopRightRadius;
        arrRightRef.value.style.borderBottomRightRadius = getComputedStyle(mainImageRef.value).borderBottomRightRadius;
    };
    const updateHeight = item => item.style.height = `${getComputedStyle(item).width.match(/\d+/g)[0] * ratioHeight}px`;
    if(el != null){
        updateHeight(el);
    }else{
        updateHeight(mainImageLoadingRef.value);
        caItemLoadingRef.value.forEach(updateHeight);
        updateArr();
    }
};
onMounted(() => {
    $gsap.from('section:first-child div #carouselComponent div', {
        y:'-50%',
        scale: 0.5,
        opacity: 0,
        delay: 1.5,
        duration:1,
        onComplete: () => local.isMainDone = true,
    }, 0);
    if(!Number.isInteger(maxItemContainer)){
        throw createError({
            statusCode: 500,
            statusMessage: 'Max item container must integer at detail page',
        });
    }
    if(maxItemContainer % 2 == 0){
        throw createError({
            statusCode: 500,
            statusMessage: 'Max item container must odd at detail page',
        });
    }
    window.addEventListener('resize', updateAspectRatio);
    $gsap.set(arrLeftRef.value, {
        x: '-50%',
        opacity: 0,
        display:'none',
    });
    $gsap.set(arrRightRef.value, {
        x: '50%',
        opacity: 0,
        display:'none',
    });
});
onBeforeUnmount(() => window.removeEventListener('resize', updateAspectRatio));
watch(() => mainImageLoadingRef.value, (newValue) => {
    if(newValue == null) return;
    updateAspectRatio(newValue);
    handleLoading(newValue, 'main');
}, { immediate:true });
watch(() => caItemLoadingRef.value, (newValue) => {
    if(caItemLoadingRef.value.length <= 0) return;
    //init carousel
    for(let i = 0; i < Math.floor((maxItemContainer - 1) / 2); i++){
        const lastChild = scrollableContainer.value.lastElementChild;
        const clonedLastChild = lastChild.cloneNode(true);
        clonedLastChild.querySelector('img').addEventListener('click', () => updateImage(lastChild.querySelector('img').src, Array.prototype.indexOf.call(scrollableContainer.value.children, lastChild)));
        scrollableContainer.value.insertBefore(clonedLastChild, scrollableContainer.value.firstChild);
        scrollableContainer.value.removeChild(lastChild);
    }
    newValue = Array.from(scrollableContainer.value.querySelectorAll('li'));
    $gsap.from(newValue, {
        y:'200%',
        opacity: 0,
        delay: 2,
        duration: 1,
        stagger: {
            from: 'start',
            each: 0.3,
        },
    }, 0);
    const conCom = getComputedStyle(scrollableContainer.value);
    const conWidth = conCom.width.match(/\d+/g)[0];
    const widthItem = `${(((conWidth - (conCom.gap.match(/\d+/g) ? (maxItemContainer - 1) * conCom.gap.match(/\d+/g)[0] : 0)) / maxItemContainer) / conWidth) * 100}%`;
    newValue.forEach(item => {
        item.style.width = widthItem;
        updateAspectRatio(item);
        handleLoading(item);
    });
    loop = horizontalLoop($gsap.utils.toArray(newValue), {paused: true, draggable: true, maxItem: maxItemContainer});
}, { immediate:true, deep: true });
const handleLoading = (card, cond = '') => {
    const image = card.querySelector('img');
    image.addEventListener('load', () => {
        if(cond == 'main'){
            arrLeftRef.value.style.height = getComputedStyle(mainImageRef.value).height;
            arrLeftRef.value.style.borderTopLeftRadius = getComputedStyle(mainImageRef.value).borderTopLeftRadius;
            arrLeftRef.value.style.borderBottomLeftRadius = getComputedStyle(mainImageRef.value).borderBottomLeftRadius;

            arrRightRef.value.style.height = getComputedStyle(mainImageRef.value).height;
            arrRightRef.value.style.borderTopRightRadius = getComputedStyle(mainImageRef.value).borderTopRightRadius;
            arrRightRef.value.style.borderBottomRightRadius = getComputedStyle(mainImageRef.value).borderBottomRightRadius;
        }
        const cardLoading = card.querySelector('.card-loading');
        if (cardLoading) {
            cardLoading.remove();
            if(card.tagName.toLowerCase() == 'li' && !local.isItemDone){
                setTimeout(() => {
                    local.isItemDone = true;
                }, 200);
            }
        }
    });
    let hasError = false;
    image.addEventListener('error', () => {
        hasError = true;
    });
    if (hasError && (image.complete || image.naturalWidth === 0)) {
        const cardLoading = card.querySelector('.card-loading');
        if (cardLoading) {
            cardLoading.remove();
            if(card.tagName.toLowerCase() == 'li'){
                local.isItemDone = true;
            }
        }
    }
}
const nextCarousel = () => loop.next({duration: 0.4, ease: "power1.inOut"})
const prevCarousel = () => loop.previous({duration: 0.4, ease: "power1.inOut"})
const updateImage = (item, index) => {
    if(local.isItemDone){
        loop.toIndex(index, {duration: 0.8, ease: "power1.inOut"});
        mainImageRef.value.src = item;
    }
}
const useHandleMainImageComposable = () => {
    return (elementId, composableType) => {
        if (!composableInstances.value[composableType][elementId]) {
            composableInstances.value[composableType][elementId] = () => {
                let isShow = ref(false);
                const enteringElement = () => { isShow.value = true; $gsap.to(arrLeftRef.value, { x: '0%', opacity: 1, display:'flex', duration: 0.5 }) && $gsap.to(arrRightRef.value, { x: '0%', opacity: 1, display:'flex', duration: 0.5 }) };
                const leavingElement = () => { isShow.value = false; $gsap.to(arrLeftRef.value, { x: '-50%', opacity: 0, display:'none', duration: 0.5 }) && $gsap.to(arrRightRef.value, { x: '50%', opacity: 0, display:'none', duration: 0.5 }) };
                return { isShow, enteringElement, leavingElement }
            };
        }
        return composableInstances.value[composableType][elementId];
    };
};
const handleMainImage = (cond) => {
    const { isShow, enteringElement, leavingElement } = createComposableInstance('container', 'any', useHandleMainImageComposable);
    if(local.isMainDone && local.isItemDone){
        if (cond === 'enter') {
            enteringElement();
        } else if (cond === 'leave') {
            leavingElement();
        }else if(cond == 'move' && !isShow){
            enteringElement();
        }
    }
}
const horizontalLoop = (items, config) => {
    function setMiddle(currentIndex, totalItems, visibleItems) {
        items.forEach(box => box.classList.remove("middle-item"));
        items[(currentIndex + Math.floor(visibleItems / 2)) % totalItems].classList.add("middle-item");
        mainImageRef.value.src = items[(currentIndex + Math.floor(visibleItems / 2)) % totalItems].querySelector('div img').src;
    }
	config = config || {};
    config.maxItem = (Number.isInteger(config.maxItem) && config.maxItem % 2 != 0) ? config.maxItem : 3; //max item must be show inside container
    config.isClickImage = false;
    config.alignThreshold = config.alignThreshold || 0.5; // Default to 50% if not specified
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

    tl.next = vars => { toIndex(curIndex + 1, vars) && setMiddle(curIndex + (config.maxItem - 5) / 2 + 1, length, config.maxItem)};
    tl.previous = vars => { toIndex(curIndex - 1, vars) && setMiddle(curIndex + (config.maxItem - 3) / 2, length, config.maxItem)};

    tl.current = () => curIndex;
    tl.toIndex = (index, vars) => { toIndex(index, vars); setMiddle(index, length, config.maxItem); }
    tl.updateIndex = () => curIndex = Math.round(tl.progress() * items.length);
    tl.times = times;
    tl.progress(1, true).progress(0, true); // pre-render for performance
    if (config.reversed) {
        tl.vars.onReverseComplete();
        tl.reverse();
    }
    setMiddle(0, length, config.maxItem); //init middle
    if (config.draggable) {
        const threshold = 5;
        let proxy = document.createElement("div"),
            wrap = $gsap.utils.wrap(0, 1),
            ratio, startProgress, draggable, dragSnap, roundFactor,
            align = () => tl.progress(wrap(startProgress + (draggable.startX - draggable.x) * ratio)),
            syncIndex = () => tl.updateIndex(),
            isDragging = false,
            startX;
        draggable = $Draggable.create(proxy, {
            trigger: items[0].parentNode,
            type: "x",
            onPress(event) {
                startX = event.clientX;
                startProgress = tl.progress();
                tl.progress(0);
                populateWidths();
                totalWidth = getTotalWidth();
                ratio = 1 / totalWidth;
                dragSnap = totalWidth / items.length;
                roundFactor = Math.pow(10, ((dragSnap + "").split(".")[1] || "").length);
                tl.progress(startProgress);
            },
            onDrag: (event) => { if (Math.abs(event.clientX - startX) > threshold) isDragging = true; align(); },
            onThrowUpdate: align,
            snap: value => {
                let n = Math.round(parseFloat(value) / dragSnap) * dragSnap * roundFactor;
                return (n - n % 1) / roundFactor;
            },
            onRelease: () => {
                if (!isDragging) return;
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
                                setMiddle(curIndex, length, config.maxItem);
                            }
                        });
                    }
                });
            }
        })[0];
        tl.draggable = draggable;
    }
	return tl;
}
</script>