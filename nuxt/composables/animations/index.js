import { getGsap } from '../config';
import { header } from './header';
export default () => {
    const gsap = getGsap();
    return gsap.context(() => {
        header();

        const secMe = gsap.utils.selector('section#me div');
        gsap.from(secMe('h3'), {
            x:'-100%',
            opacity: 0,
            delay: 0.6,
            duration: 1,
            stagger: 0.4
        });
        gsap.from(secMe('h1'), {
            x:'-50%',
            opacity: 0,
            delay: 0.7,
            duration: 1,
            stagger: 0.4
        });
        gsap.from(secMe('a:not(#btnContact)'), {
            y:'200%',
            opacity: 0,
            delay: 1,
            duration: 1,
            stagger: {
                from: 'start',
                each: 0.3,
            },
        });
        gsap.from(secMe('a#btnContact'), {
            y:'300%',
            opacity: 0,
            delay: 0.8,
            duration: 1,
        });
        gsap.from(secMe('img'), {
            x:'100%',
            delay: 0.65,
            opacity: 0,
            duration: 1,
        });

        const secAbout = gsap.utils.selector('section#about');
        gsap.from(secAbout('a:not(#btnCV)'), {
            y:'200%',
            opacity: 0,
            delay: 1,
            duration: 1,
            stagger: {
                from: 'center',
                each: 0.3,
            },
        });
        gsap.from(secAbout('a#btnCV'), {
            y:'300%',
            opacity: 0,
            delay: 0.8,
            duration: 1,
        });
        // gsap.from(secAbout('h3'), {
        //     x:'-100%',
        //     opacity: 0,
        //     duration: 1,
        // });

        const secProject = gsap.utils.selector('section#project');
        // gsap.from(secProject('h3'), {
        //     x:'-100%',
        //     opacity: 0,
        //     duration: 1,
        // });

        const secContact = gsap.utils.selector('section#contact');
        // gsap.from(secContact('h3'), {
        //     x:'-100%',
        //     opacity: 0,
        //     duration: 1,
        // });
    });
}