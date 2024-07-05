import { getGsap } from '../config';
import { header } from './header';
export default () => {
    const gsap = getGsap();
    return gsap.context(() => {
        header();

        const secMe = gsap.utils.selector('section#me div');
        gsap.from(secMe('h1, h3'), {
            y:'100%',
            opacity: 0,
            duration: 1,
            stagger: 0.05
        });
        gsap.from(secMe('a:not(#btnContact)'), {
            y:'100%',
            opacity: 0,
            duration: 1,
            stagger: {
                from: 'start',
                each: 0.2,
            },
        });
        gsap.from(secMe('a#btnContact'), {
            y:'100%',
            opacity: 0,
            duration: 1,
        });
        gsap.from(secMe('img'), {
            x:'100%',
            opacity: 0,
            duration: 1,
        });

        const secAbout = gsap.utils.selector('section#about');
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