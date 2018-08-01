import Vue from 'vue';

import Router from 'vue-router';
import Auth from "../components/auth/RegisterComponent";

Vue.use(Router);

const routes = [
    {
        path: '/auth/register',
        name: 'Register',
        component:Auth

    }
];
const router = new Router(
{
    mode:'history',
    routes

});

export default router