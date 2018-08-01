import Vue from 'vue';

import Router from 'vue-router';
import TheRegister from '../components/auth/TheRegisterComponent';
Vue.use(Router);

const routes = [
    {
        path:'/auth/register',
        name:'TheRegister',
        component:TheRegister
    }
];

const router = new Router({
   mode:'hash',
   routes
});

export default router