// import { getGsap } from '../../config';
// export default () => {
//     const gsap = getGsap();
//     return gsap.context(() => {
//         const header = gsap.utils.selector('header');
//         gsap.from(header('a'), {
//             y:'-100%',
//             opacity: 0,
//             duration: 1,
//         });

//         const secMe = gsap.utils.selector('section#me');
//         gsap.from(secMe('h3'), {
//             x:'-100%',
//             opacity: 0,
//             duration: 1,
//         });

//         const secAbout = gsap.utils.selector('section#about');
//         gsap.from(secAbout('h3'), {
//             x:'-100%',
//             opacity: 0,
//             duration: 1,
//         });

//         const secProject = gsap.utils.selector('section#project');
//         gsap.from(secProject('h3'), {
//             x:'-100%',
//             opacity: 0,
//             duration: 1,
//         });

//         const secContact = gsap.utils.selector('section#contac');
//         gsap.from(secContact('h3'), {
//             x:'-100%',
//             opacity: 0,
//             duration: 1,
//         });
//     });
// }