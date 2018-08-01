require('./bootstrap');
import Vue from 'vue';
import ZhuceComponent from './components/ZhuCeComponent';
import router from './router/router';
const vue = new Vue({
    el:"#app",
    router,
    components: {
        ZhuceComponent
    }
})
