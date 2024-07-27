//original work
const initAll = () => {
    nextTick(() => {
        // console.log('nexttt')
        //main image
        // if(!local.isMainDone || mainImageLoadingRef.value != null){
        if(!local.isMainDone || (mainImageLoadingRef.value != null && !local.isFirstTime)){
            console.log('ws kenkk', local.isMainDone);
            console.log('mainImg', mainImageLoadingRef.value);
            updateAspectRatio(mainImageLoadingRef.value);
            handleLoading(mainImageLoadingRef.value, 'main');
            local.isMainDone = true;
        }

        //item card 
        if(!local.isItemDone || (caItemLoadingRef.value.length >= 0 && !local.isFirstTime)){
            console.log('ws cardd', local.isItemDone);
            console.log('cardImg', caItemLoadingRef.value);
            //init carousel
            for(let i = 0; i < Math.floor((maxItemContainer - 1) / 2); i++){
                const lastChild = scrollableContainer.value.lastElementChild;
                const clonedLastChild = lastChild.cloneNode(true);
                clonedLastChild.querySelector('img').addEventListener('click', () => updateImage(lastChild.querySelector('img').src, Array.prototype.indexOf.call(scrollableContainer.value.children, lastChild)));
                scrollableContainer.value.insertBefore(clonedLastChild, scrollableContainer.value.firstChild);
                scrollableContainer.value.removeChild(lastChild);
            }
            // $gsap.from(caItemLoadingRef.value, {
            //     y:'200%',
            //     opacity: 0,
            //     delay: 2,
            //     duration: 1,
            //     stagger: {
            //         from: 'start',
            //         each: 0.3,
            //     },
            // }, 0);
            caItemLoadingRef.value = Array.from(scrollableContainer.value.querySelectorAll('li'));
            const conCom = getComputedStyle(scrollableContainer.value);
            const conWidth = conCom.width.match(/\d+/g)[0];
            const widthItem = `${(((conWidth - (conCom.gap.match(/\d+/g) ? (maxItemContainer - 1) * conCom.gap.match(/\d+/g)[0] : 0)) / maxItemContainer) / conWidth) * 100}%`;
            caItemLoadingRef.value.forEach(item => {
                item.style.width = widthItem;
                updateAspectRatio(item);
                handleLoading(item);
            });
            loop = horizontalLoop($gsap.utils.toArray(caItemLoadingRef.value), {paused: true, draggable: true, maxItem: maxItemContainer});
            console.log('');
        };
    });
}

const cardObs = new IntersectionObserver((cardEntries) => {
    console.log('int cardd', cardEntries)
    cardEntries.forEach((cardEntry, index) => {
        if (cardEntry.isIntersecting) {
            console.log(`cardd ${index} ws kenekk`);
            const item = cardEntry.target;
            item.style.width = widthItemCard;
            updateAspectRatio(item);
            handleLoading(item);
            cardObs.unobserve(item); // unobserve the element
            console.log(`cardd ${index} ws mari \n`);
        }
    });
    console.log('');
}, { threshold: 0.5 });
caItemLoadingRef.value.forEach((item) => {
    cardObs.observe(item);
});

//almost works except card item
const initAll = () => {
    nextTick(() => {
        let widthItemCard = '0%';
        //main image
        if(!local.isMainDone || (mainImageLoadingRef.value != null && !local.isFirstTime)){
            const mainImgObs = new IntersectionObserver((entries) => {
                console.log('intt main', entries)
                entries.forEach((entry, index) => {
                    if(entry.isIntersecting){
                        console.log('main ws kenkk', getComputedStyle(mainImageLoadingRef.value).width);
                        updateAspectRatio(mainImageLoadingRef.value);
                        handleLoading(mainImageLoadingRef.value, 'main');
                        local.isMainDone = true;
                        mainImgObs.disconnect();
                        // console.log("main ws mari \n");
                    }
                });
                console.log('');
            }, { threshold: 0.5 });
            mainImgObs.observe(mainImageLoadingRef.value);
        }
        
        //item card
        if(!local.isItemDone || (scrollableContainerRef.value != null && !local.isFirstTime)){
            const scrollContainerObs = new IntersectionObserver((entries) => {
                console.log('intt scroll', entries)
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        console.log('scroll ws kenkk');
                        //init carousel
                        for(let i = 0; i < Math.floor((maxItemContainer - 1) / 2); i++){
                            const lastChild = scrollableContainerRef.value.lastElementChild;
                            const clonedLastChild = lastChild.cloneNode(true);
                            clonedLastChild.querySelector('img').addEventListener('click', () => updateImage(lastChild.querySelector('img').src, Array.prototype.indexOf.call(scrollableContainerRef.value.children, lastChild)));
                            scrollableContainerRef.value.insertBefore(clonedLastChild, scrollableContainerRef.value.firstChild);
                            scrollableContainerRef.value.removeChild(lastChild);
                        }
                        caItemLoadingRef.value = Array.from(scrollableContainerRef.value.querySelectorAll('li'));
                        console.log('ws mari init')
                        const conCom = getComputedStyle(scrollableContainerRef.value);
                        const conWidth = conCom.width.match(/\d+/g)[0];
                        const widthItemCard = `${(((conWidth - (conCom.gap.match(/\d+/g) ? (maxItemContainer - 1) * conCom.gap.match(/\d+/g)[0] : 0)) / maxItemContainer) / conWidth) * 100}%`;
                        caItemLoadingRef.value.forEach((item, index) => {
                            const cardObs = new IntersectionObserver((entries) => {
                            console.log('int cardd', entries)
                            entries.forEach((entry) => {
                                if (entry.isIntersecting) {
                                console.log(`cardd ${index} ws kenekk`);
                                const item = entry.target;
                                item.style.width = widthItemCard;
                                updateAspectRatio(item);
                                handleLoading(item);
                                cardObs.disconnect(); // Disconnect the observer for this element
                                console.log(`cardd ${index} ws mari \n`);
                                }
                            });
                            console.log('');
                            }, { threshold: 0.1, root: scrollableContainerRef.value });
                            cardObs.observe(item);
                        });
                        scrollContainerObs.disconnect();
                        console.log("scroll ws mari \n");
                    }
                    loop = horizontalLoop($gsap.utils.toArray(caItemLoadingRef.value), {paused: true, draggable: true, maxItem: maxItemContainer});
                });
            }, { threshold: 0.5 });
            scrollContainerObs.observe(scrollableContainerRef.value);
        }
    });
}

//fully working successfully
const initAll = () => {
    nextTick(() => {
        //main image
        if(!local.isMainDone || (mainImageLoadingRef.value != null && !local.isFirstTime)){
            const mainImgObs = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        updateAspectRatio(mainImageLoadingRef.value);
                        handleLoading(mainImageLoadingRef.value, 'main');
                        mainImgObs.disconnect();
                    }
                });
            }, { threshold: 0.5 });
            mainImgObs.observe(mainImageLoadingRef.value);
        }

        //item card
        if(!local.isItemDone || (scrollableContainerRef.value != null && !local.isFirstTime)){
            const scrollContainerObs = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        //init carousel
                        for(let i = 0; i < Math.floor((maxItemContainer - 1) / 2); i++){
                            const lastChild = scrollableContainerRef.value.lastElementChild;
                            const clonedLastChild = lastChild.cloneNode(true);
                            clonedLastChild.querySelector('img').addEventListener('click', () => updateImage(lastChild.querySelector('img').src, Array.prototype.indexOf.call(scrollableContainerRef.value.children, lastChild)));
                            scrollableContainerRef.value.insertBefore(clonedLastChild, scrollableContainerRef.value.firstChild);
                            scrollableContainerRef.value.removeChild(lastChild);
                        }
                        caItemLoadingRef.value = Array.from(scrollableContainerRef.value.querySelectorAll('li'));
                        const tl = $gsap.timeline();
                        const prefix = 'section:first-child div';
                        tl.from(`${prefix} #carouselComponent div`, {
                            y:'-50%',
                            scale: 0.5,
                            opacity: 0,
                            delay: 0.6,
                            duration:1,
                            onComplete: () => local.isMainDone = true,
                        }, 0);
                        tl.from(`${prefix} #carouselComponent ul`, {
                            x: '-50%',
                            y: '100%',
                            scale: 0.5,
                            opacity: 0,
                            delay: 0.8,
                            duration:1,
                        }, 0);
                        tl.from(caItemLoadingRef.value, {
                            y:'200%',
                            opacity: 0,
                            delay: 1,
                            duration: 1,
                            stagger: {
                                from: 'start',
                                each: 0.3,
                            },
                        }, 0);
                        const conCom = getComputedStyle(scrollableContainerRef.value);
                        const conWidth = conCom.width.match(/\d+/g)[0];
                        const widthItemCard = `${(((conWidth - (conCom.gap.match(/\d+/g) ? (maxItemContainer - 1) * conCom.gap.match(/\d+/g)[0] : 0)) / maxItemContainer) / conWidth) * 100}%`;
                        caItemLoadingRef.value.forEach(item => {
                            item.style.width = widthItemCard;
                            updateAspectRatio(item);
                            handleLoading(item);
                        });
                        scrollContainerObs.disconnect();
                        loop = horizontalLoop($gsap.utils.toArray(caItemLoadingRef.value), {paused: true, draggable: true, maxItem: maxItemContainer});
                    }
                });
            }, { threshold: 0.5 });
            scrollContainerObs.observe(scrollableContainerRef.value);
        }
    });
}