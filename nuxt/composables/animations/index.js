import { ref } from 'vue';
import { getGsap } from '../config';
import { header } from './header';
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
        header(tl);

        const secMe = gsap.utils.selector('section#me div');
        tl.from(secMe('h3'), {
            x:'-100%',
            opacity: 0,
            delay: 0.6,
            duration: 1,
            stagger: 0.4
        }, 0);
        tl.from(secMe('h1'), {
            x:'-50%',
            opacity: 0,
            delay: 0.7,
            duration: 1,
            stagger: 0.4
        }, 0);
        tl.from(secMe('a:not(#btnContact)'), {
            y:'200%',
            opacity: 0,
            delay: 1,
            duration: 1,
            stagger: {
                from: 'start',
                each: 0.3,
            },
        }, 0);
        tl.from(secMe('a#btnContact'), {
            y:'300%',
            opacity: 0,
            delay: 0.8,
            duration: 1,
        }, 0);
        tl.from(secMe('img'), {
            x:'100%',
            delay: 0.65,
            opacity: 0,
            duration: 1,
        }, 0);

        const secAbout = gsap.utils.selector('section#about');
        tl.from(secAbout('a:not(#btnCV)'), {
            y:'200%',
            opacity: 0,
            delay: 1,
            duration: 1,
            stagger: {
                from: 'center',
                each: 0.3,
            },
        }, 0);
        tl.from(secAbout('a#btnCV'), {
            y:'300%',
            opacity: 0,
            delay: 0.8,
            duration: 1,
        }, 0);
        // tl.from(secAbout('h3'), {
        //     x:'-100%',
        //     opacity: 0,
        //     duration: 1,
        // });

        const secProject = gsap.utils.selector('section#project');
        // tl.from(secProject('h3'), {
        //     x:'-100%',
        //     opacity: 0,
        //     duration: 1,
        // });

        const secContact = gsap.utils.selector('section#contact');
        // tl.from(secContact('h3'), {
        //     x:'-100%',
        //     opacity: 0,
        //     duration: 1,
        // });
        return tl;
    });
    return { gsapContext, isAnimateComplete }
}