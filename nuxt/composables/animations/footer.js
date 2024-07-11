import { getGsap, useScreenConfig } from '../config';
export function footer(){
    const fullPath = useRoute().fullPath;
    const { screenSize } = useScreenConfig();
    const gsap = getGsap();
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: 'footer',
            start: () => {
                if(fullPath === '/' || fullPath === '/projects'){
                    if(screenSize.value >= 1500){
                        return 'top 75%';
                    }else if(screenSize.value >= 1000){
                        return 'top 120%';
                    }else if(screenSize.value >= 500){
                        return 'top 130%';
                    }else if(screenSize.value >= 320){
                        return '-20% 110%';
                    }
                }else{
                    if(screenSize.value >= 1500){
                        return 'top 75%';
                    }else if(screenSize.value >= 1000){
                        return 'top 120%';
                    }else if(screenSize.value >= 500){
                        return 'top 130%';
                    }else if(screenSize.value >= 320){
                        return '-20% 110%';
                    }
                }
            },
        }
    });
    tl.from('footer' , {
        y:'-100%',
        opacity: 0,
        duration: 1,
    }, 0);
    return tl;
}