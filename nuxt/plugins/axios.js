import axios from 'axios';
import Cookies from 'js-cookie';
export default defineNuxtPlugin(nuxtApp => {
    const config = useRuntimeConfig();
    const instance = axios.create({
        baseURL: config.public.baseURL,
        withCredentials: true
    });
    instance.interceptors.request.use(async (config) => {
        let token = Cookies.get('XSRF-TOKEN');
        if (!token) {
            console.log('enek nn');
            const response = await instance.get('/sanctum/csrf-cookie');
            console.log(response);
            const setCookieHeader = response.headers['set-cookie'];
            console.log(setCookieHeader);
            if (setCookieHeader) {
                const xsrfCookie = setCookieHeader.find(cookie => cookie.startsWith('XSRF-TOKEN='));
                if (xsrfCookie) {
                    token = xsrfCookie.split(';')[0].split('=')[1];
                    Cookies.set('XSRF-TOKEN', token, {
                        expires: 2 / 24,
                        path: '/',
                        sameSite: 'lax'
                    });
                }
            }
        }
        if (token) {
            config.headers['X-CSRF-TOKEN'] = token;
        }
        return config;
    });
    instance.interceptors.response.use(response => {
        const token = response.headers['x-xsrf-token'];
        if (token) {
            Cookies.set('XSRF-TOKEN', token, {
                expires: 2 / 24,
                path: '/',
                sameSite: 'lax'
            });
        }
        return response;
    });
    nuxtApp.provide('axios', instance);
});

// export default function ({ $axios }) {
//     const publicConfig = useRuntimeConfig().public;
//     $axios.onRequest(async (config) => {
//         // Check if CSRF token is already set in cookies
//         let token = Cookies.get('XSRF-TOKEN');
//         if (!token) {
//             // Fetch the CSRF cookie if it's not set
//             const response = await $axios.get(`${publicConfig.baseURL}/sanctum/csrf-cookie`, { withCredentials: true });
//             // Extract the CSRF token from the response headers
//             token = response.headers['x-xsrf-token'];
//             if (!token) {
//                 // If the token is not present in headers, check the Set-Cookie header
//                 const xsrfCookie = response.headers['set-cookie']?.find(cookie => cookie.startsWith('XSRF-TOKEN='));
//                 if (xsrfCookie) {
//                     token = xsrfCookie.split(';')[0].split('=')[1];
//                     console.log('cookie');
//                     Cookies.set('XSRF-TOKEN', token, {
//                         expires: 2 / 24,
//                         path: '/',
//                         sameSite: 'lax'
//                     });
//                 }
//             }
//             if (token) {
//                 // Set the CSRF token in cookies
//                 Cookies.set('XSRF-TOKEN', token, {
//                     expires: 2 / 24,
//                     path: '/',
//                     sameSite: 'lax'
//                 });
//             } else {
//                 console.error('CSRF token is not set in the headers.');
//             }
//         }
//         // Include the CSRF token in the headers of the request
//         config.headers.common['X-CSRF-TOKEN'] = token;
//         config.withCredentials = true;
//         return config;
//     });

//     $axios.onResponse(response => {
//         // Extract the CSRF token from the response headers
//         const token = response.headers['x-xsrf-token'];
//         if (token) {
//         // Set the CSRF token in cookies
//             Cookies.set('XSRF-TOKEN', token);
//         }
//     });
// }