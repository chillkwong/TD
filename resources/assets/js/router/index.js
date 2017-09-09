import Vue from 'vue'
import VueRouter from 'vue-router'

import Header from '../views/layouts/header.vue'
import Footer from '../views/layouts/footer.vue'

import AdmHeader from '../views/adm/header.vue'
import AdmFooter from '../views/adm/footer.vue'
import Admin from '../views/adm/index.vue'

import Home from '../views/home.vue'
import AdmLogin from '../views/Auth/adm_login.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
	{path: '/', components: {header:Header, default: Home, footer:Footer}, 
		children:[
		{path:'', component: Home}
	
		]},


	{path: '/td-login', component: AdmLogin},
	{path: '/adm', components: {header:AdmHeader, default: Admin, footer:AdmFooter},
		children:[
		{path: 'posts',}
		]}
	]
	
})
export default router