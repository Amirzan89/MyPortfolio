import axios from 'axios';
import Cookies from 'js-cookie';
export default defineNuxtPlugin(nuxtApp => {
    const config = useRuntimeConfig();
    const instance = axios.create({
        baseURL: config.public.baseURL,
        withCredentials: true
    });
    instance.interceptors.request.use(async (requestConfig) => {
        let token = Cookies.get('XSRF-TOKEN');
        if (!token) {
            await axios.get(`${config.public.baseURL}/sanctum/csrf-cookie`, { withCredentials: true });
            token = Cookies.get('XSRF-TOKEN');
        }
        requestConfig.headers['X-XSRF-TOKEN'] = token;
        return requestConfig;
    }, error => {
        return Promise.reject(error);
    });
    nuxtApp.provide('axios', instance);
});