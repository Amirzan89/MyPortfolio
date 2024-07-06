import { getGsap } from '../../config';
import { header } from './../header';
export default () => {
    const gsap = getGsap();
    return gsap.context(() => {
        header();

        const sec = gsap.utils.selector('section');
        // gsap.from(sec('div:not(.card-loading) span'), {
        //     x: '-100%',
        //     duration: 1.5,
        //     opacity: 0,
        // });
    });
}