import { ref } from 'vue';
import { getGsap, useScreenConfig } from '../../config';
import { header } from './../header';
import { footer } from './../footer';
export default () => {
    const gsap = getGsap();
    const { screenSize } = useScreenConfig();
    const gsapContext = ref(null);
    const isAnimateComplete = ref(false);
    gsapContext.value =  gsap.context(() => {
        const tl = gsap.timeline({
            onComplete: () => {
                isAnimateComplete.value = true;
            }
        });
        header();

        const first = gsap.utils.selector('section:first-child div');
        if(screenSize.value >= 768){
            //for desktop
            tl.from(first('h1'), {
                x:'100%',
                opacity: 0,
                delay: 0.7,
                duration:1,
            }, 0);
            tl.from(first('p'), {
                x:'100%',
                opacity: 0,
                delay: 1,
                duration:1,
            }, 0);
        }else{
            //for mobile or tablet
            tl.from(first('h1'), {
                x:'-100%',
                opacity: 0,
                delay: 0.7,
                duration:1,
            }, 0);
            tl.from(first('p'), {
                x:'-50%',
                opacity: 0,
                delay: 1,
                duration:1,
            }, 0);
        }
        tl.from(first('#carouselComponent ul'), {
            x: '-50%',
            y: '100%',
            scale: 0.5,
            opacity: 0,
            delay: 1.7,
            duration:1,
        }, 0);
        footer();
        return tl;
    });
    return { gsapContext, isAnimateComplete }
}