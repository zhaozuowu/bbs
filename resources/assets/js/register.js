require('./bootstrap')

import Vue  from 'vue'
import router from './router'
import RegisterComponent from './components/RegisterComponent'
new Vue({
    el:"#app",
    router,
    components:{RegisterComponent}
    //components:{NavTopComponent},
});



