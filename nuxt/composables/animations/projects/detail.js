import { getGsap } from '../../config';
import { header } from './../header';
export default () => {
    const gsap = getGsap();
    return gsap.context(() => {
        // header();

        // const secMe = gsap.utils.selector('section#me div');

        // const secAbout = gsap.utils.selector('section#about');

        // const secProject = gsap.utils.selector('section#project');

        // const secContact = gsap.utils.selector('section#contact');
    });
}