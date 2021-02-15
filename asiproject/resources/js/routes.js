
import home from './components/home';
import about from './components/about';
import rules from './components/rules';






export default {
    mode:'history',


    routes: [

        {
            path: '/home',

            component: home

        },

        {
            path: '/about',

            component: about
        },

        {
            path: '/rules',

            component: rules
        },




    ]










};