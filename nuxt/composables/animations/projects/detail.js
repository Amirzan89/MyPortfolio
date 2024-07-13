import { ref } from 'vue';
import { getGsap } from '../../config';
import { header } from './../header';
import { footer } from './../footer';
export default () => {
    const gsap = getGsap();
    const gsapContext = ref(null);
    const isAnimateComplete = ref(false);
    gsapContext.value =  gsap.context(() => {
        const tl = gsap.timeline({
            onComplete: () => {
                isAnimateComplete.value = true;
            }
        });
        header();

        const sec = gsap.utils.selector('section');
        // tl.from('', {
        //     // scrollTrigger:
        // })
        // tl.from(sec('div:not(.card-loading) span'), {
        //     x: '-100%',
        //     duration: 1.5,
        //     opacity: 0,
        // });
        // footer();
        return tl;
    });
    return { gsapContext, isAnimateComplete }
}