class CarouselSlide{
    #sensitivity = 1;
    wrapper = null;
    itemReff = [];
    activeReff = [];
    isMouseDown = false;
    startX = 0;
    scrollLeft = 0;
    constructor(wrapper, itemReff, activeReff, sensitivity = 1){
        this.#sensitivity = sensitivity;
        this.wrapper = wrapper;
        this.itemReff = itemReff;
        this.activeReff = activeReff;
        this.wrapper.addEventListener('wheel', this.scrollCarousel.bind(this));
        this.wrapper.addEventListener('mousedown', this.mouseDown.bind(this));
        this.wrapper.addEventListener('mouseleave', this.mouseLeave.bind(this));
        this.wrapper.addEventListener('mouseup', this.mouseUp.bind(this));
        this.wrapper.addEventListener('mousemove', this.mouseMove.bind(this));
    }
    static #debounce(callback, delay) {
        console.log('debounce with delay '+ 500);
        let timer
        return function(...args) {
            clearTimeout(timer);
            timer = setTimeout(() => {
                console.log('ws mari');
                callback(...args);
            }, delay);
        }
    }
    initCarousel(){
        this.itemReff.forEach((item, index) => {
            this.itemReff[index].style.left = `${index * 100}%`;
        });
    }
    getActiveImage(){
        // return this.wrapper;
    }
    handleCarousel(index) {
        this.wrapper.scrollLeft = index * this.wrapper.offsetWidth;
    }
    scrollCarousel(event){
        event.preventDefault();
        let scrollValue = 0;
        if(event.deltaX){
            scrollValue = event.deltaX;
        }else if(event.deltaY){
            scrollValue = event.deltaY;
        }
        this.wrapper.scrollLeft += scrollValue;
        //change active state
        let index = Math.round(this.wrapper.scrollLeft/this.wrapper.offsetWidth);
        for(let i = 0; i < this.activeReff.length; i++){
            if(index == i){
                this.activeReff[index].classList.remove('hover:border-red-500');
                this.activeReff[index].classList.add('border-red-500');
            }else{
                this.activeReff[i].classList.remove('border-red-500');
                this.activeReff[i].classList.add('hover:border-red-500');
            }
        }
            setTimeout(() => {
                //change float value
                const targetScrollLeft = index * this.wrapper.offsetWidth;
                const duration = 5000;
                const intervalTime = 100;
                const steps = duration / intervalTime;
                const scrollStep = (targetScrollLeft - this.wrapper.scrollLeft) / steps;
                console.log('index '+ index);
                console.log('target scroll '+ targetScrollLeft);
                console.log('scroll step '+ scrollStep);
                console.log('');
                let currentStep = 0;
                const intervalId = setInterval(() => {
                    this.wrapper.scrollLeft += scrollStep;
                    currentStep++;
                    if (currentStep >= steps) {
                        clearInterval(intervalId);
                        this.wrapper.scrollLeft = targetScrollLeft;
                    }
                }, intervalTime);
            }, 500);
    }
    changeCarousel(index){
        this.handleCarousel(index);
    }
    prevCarousel(index){
        this.handleCarousel(index);
    }
    nextCarousel(index){
        this.handleCarousel(index);
    }
    mouseDown(event){
        this.isDown = true;
        this.startX = event.pageX - this.wrapper.offsetLeft;
        this.scrollLeft = this.wrapper.scrollLeft;
    }
    mouseLeave(){
        this.isDown = false;
    }
    mouseUp(){
        this.isDown = false;
    }
    mouseMove(event){
        // }, 500);
        // CarouselSlide.#debounce(() => {
            if (!this.isDown) return;
            event.preventDefault();
            const x = event.pageX - this.wrapper.offsetLeft;
            const walk = (x - this.startX) * this.#sensitivity;
            this.wrapper.scrollLeft = this.scrollLeft - walk;
            let index = Math.round(this.wrapper.scrollLeft/this.wrapper.offsetWidth);
            // setTimeout(() => {
            //     //change float value
            //     let index = Math.round(this.wrapper.scrollLeft/this.wrapper.offsetWidth);
            //     const targetScrollLeft = index * this.wrapper.offsetWidth;
            //     const duration = 500; // Duration of the smooth scroll in milliseconds
            //     const intervalTime = 10; // Time interval for each step in milliseconds
            //     const steps = duration / intervalTime; // Number of steps
            //     const scrollStep = (targetScrollLeft - this.wrapper.scrollLeft) / steps; // Scroll value per step
            //     let currentStep = 0;
            //     const intervalId = setInterval(() => {
            //         this.wrapper.scrollLeft += scrollStep;
            //         currentStep++;
            //         if (currentStep >= steps) {
            //             clearInterval(intervalId);
            //             this.wrapper.scrollLeft = targetScrollLeft;
            //         }
            //     }, intervalTime);
            // }, 500);
            setTimeout(() => {
                //change float value
                this.wrapper.scrollLeft = index * this.wrapper.offsetWidth;
            }, 500);
    }
}
export default CarouselSlide;