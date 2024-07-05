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
    initCarousel(){
        this.itemReff.forEach((item, index) => {
            this.itemReff[index].style.left = `${index * 100}%`;
        });
    }
    static #debounce(callback, delay) {
        let timer = null;
        return function() {
            clearTimeout(timer)
            timer = setTimeout(() => {
                callback();
            }, delay);
        }
    }
    getActiveImage(){
        // return this.wrapper;
    }
    static #changeStateItem = (instance, delay) => {
        const itsef =  this.#debounce(() => {
            //change float value
            let index = Math.round(instance.wrapper.scrollLeft/instance.wrapper.offsetWidth)
            const targetScrollLeft = index * instance.wrapper.offsetWidth;
            const duration = 1500;
            const intervalTime = 5;
            const steps = duration / intervalTime;
            const scrollStep = (targetScrollLeft - instance.wrapper.scrollLeft) / steps;
            // console.log('hasil '+ instance.wrapper.scrollLeft/instance.wrapper.offsetWidth);
            // console.log('index' + index);
            // console.log('target scroll ' + targetScrollLeft);
            // console.log('rest scroll ');
            // console.log(targetScrollLeft - instance.wrapper.scrollLeft);
            // console.log('scroll step ' +scrollStep);
            let currentStep = 0;
            const intervalId = setInterval(() => {
                instance.wrapper.scrollLeft += scrollStep;
                currentStep++;
                if (currentStep > steps) {
                    // console.log('last step ' + currentStep);
                    // console.log('scroll left ' + instance.wrapper.scrollLeft);
                    clearInterval(intervalId);
                    instance.wrapper.scrollLeft = targetScrollLeft;
                    // console.log('scroll left newss ' + instance.wrapper.scrollLeft);
                    // console.log('');
                }
            }, intervalTime);
        }, delay);
        this.#changeStateItem = itsef;
    };
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
        CarouselSlide.#changeStateItem(this, 1000);
    }
    changeCarousel(index){
        this.wrapper.scrollLeft = index * this.wrapper.offsetWidth;
    }
    prevCarousel(index){
        this.wrapper.scrollLeft = index * this.wrapper.offsetWidth;
    }
    nextCarousel(index){
        this.wrapper.scrollLeft = index * this.wrapper.offsetWidth;
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
        if (!this.isDown) return;
        event.preventDefault();
        const x = event.pageX - this.wrapper.offsetLeft;
        const walk = (x - this.startX) * this.#sensitivity;
        this.wrapper.scrollLeft = this.scrollLeft - walk;
        let index = Math.round(this.wrapper.scrollLeft/this.wrapper.offsetWidth);
        CarouselSlide.#changeStateItem(this, 500);
    }
}
export default CarouselSlide;