import { getGsap } from '../config';
export function header(tl){
    const gsap = getGsap();
    const header = gsap.utils.selector('header');
    tl.from(header('h1, a, button'), {
        y:'-100%',
        opacity: 0,
        duration: 1,
    });
}