import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../views/home.vue'
import Login from '../views/Auth/Login.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
	{path: '/', component:  Home},
	{path: '/td-login', component: Login}
	]
	
})
export default router