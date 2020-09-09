import Vue from 'vue'
import router from './router'
import axios from 'axios'
import Home from './components/Home'
require('./bootstrap');

window.axios = axios

new Vue({
    el: '#app',
    router,
    components: {
        Home,
    }
});
