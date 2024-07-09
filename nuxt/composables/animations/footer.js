import { getGsap } from '../config';
export function footer(){
    const fullPath = useRoute().fullPath;
    const gsap = getGsap();
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: 'footer',
            start: () => {
                if(fullPath === '/'){
                    return 'top 75%';
                }else if(fullPath === '/projects'){
                    return 'top 120%';
                }else{
                    return 'top bottom';
                }
            },
            end: 'top none',
        }
    });
    tl.from('footer' , {
        y:'-100%',
        opacity: 0,
        duration: 1,
    }, 0);
    return tl;
}