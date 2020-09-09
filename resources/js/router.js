import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './components/Home'
import Login from './components/auth/Login'
import Register from './components/auth/Register'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {path: '/', component: Home},
        {path: '/login', component: Login},
        {path: '/register', component: Register}
    ],
    mode: 'history',
    base: __dirname,
})
