import { getGsap } from '../config';
export function header(){
    const gsap = getGsap();
    const header = gsap.utils.selector('header');
    const tl = gsap.timeline();
    tl.from(header('h1, a, button'), {
        y:'-100%',
        opacity: 0,
        duration: 1,
    }, 0);
}