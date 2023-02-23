require('./bootstrap');
import { createApp } from 'vue'
// router
import * as  VueRouter from 'vue-router'
//Import File
import HomeComponent from './components/HomeComponent.vue'
import AboutComponent from './components/AboutComponent.vue'
import TaskComponent from './components/TaskComponent.vue'

const routes = [
    {
        path: '/',
        component:HomeComponent
    },
    {
        path: '/about',
        component:AboutComponent
    },
    {
        path: '/task',
        component:TaskComponent
    }
]
const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/vuecrud/public/'),
    routes,
})



const app = createApp({})
window.url = "/ganja/"
app.use(router)

app.component('home-component',HomeComponent)
app.mount('#app');
