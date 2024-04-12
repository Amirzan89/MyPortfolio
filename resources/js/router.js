import { createRouter, createWebHistory } from 'vue-router';
import axios from 'axios';
const LoginPage = () => import('./views/Login.vue');
const NotFound = () => import('./views/NotFound.vue');
const routes = [
    {
        path: '/login',
        name: 'Login',
        component: LoginPage
    },
    //not found
    {
        path: '/:catchAll(.*)',
        name: 'NotFound',
        component: NotFound,
    }
];
const router = createRouter({
    history: createWebHistory(window.env.baseUrl),
    routes
});
export default router;