require('./bootstrap');

// import Parallax from 'parallax-js';

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);




// Parallax
// para


const app = new Vue({
    el: '#app',



    router: new VueRouter(routes)

});
