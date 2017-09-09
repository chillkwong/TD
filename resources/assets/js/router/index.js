import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../views/home.vue'
import Login from '../views/Auth/Login.vue'
import Admin from '../views/adm/index.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
	{path: '/', component:  Home},
	{path: '/td-login', component: Login},
	{path: '/adm', component: Admin}
	]
	
})
export default router