class CarouselSlide{
    static initCarousel(reff){
        reff.forEach((item, index) => {
            reff[index].style.left = `${index * 100}%`;
        });
        return reff;
    }
    static #handleCarousel(reff, count){
        reff.forEach((item) => {
            item.style.transform = `translateX(-${count * 100}%)`;
        });
        return reff;
    }
    static scrollCarousel(reff, scroll){
        reff.forEach((item) => {
            item.style.transform = `translateX(${scroll}%)`;
        });
        return reff;
    }
    static changeCarousel(reff, index){
        return CarouselSlide.#handleCarousel(reff, index);
    }
    static prevCarousel(reff, index){
        return CarouselSlide.#handleCarousel(reff, index);
    }
    static nextCarousel(reff, index){
        return CarouselSlide.#handleCarousel(reff, index);
    }
}
const wrapper = document.querySelector(".wrapper");
let isDown = false;
let startX;
let scrollLeft;

    wrapper.addEventListener("mousedown", (e) => {
        isDown = true;
        startX = e.pageX - wrapper.offsetLeft;
        scrollLeft = wrapper.scrollLeft;
    });

    wrapper.addEventListener("mouseleave", () => {
        isDown = false;
    });

    wrapper.addEventListener("mouseup", () => {
        isDown = false;
    });

    wrapper.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - wrapper.offsetLeft;
        const walk = (x - startX) * 3; // You can adjust the scrolling speed here
        wrapper.scrollLeft = scrollLeft - walk;
    });
export default CarouselSlide;