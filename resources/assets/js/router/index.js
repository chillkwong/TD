import Vue from 'vue'
import VueRouter from 'vue-router'

//layouts
import Header from '../views/layouts/header.vue'
import Footer from '../views/layouts/footer.vue'

//admin layouts
import AdmHeader from '../views/adm/header.vue'
import AdmFooter from '../views/adm/footer.vue'
import Admin from '../views/adm/index.vue'

//admin dashboard

//invoice
import InvoiceIndex from '../views/invoice/index.vue'
import InvoiceShow from '../views/invoice/show.vue'

//Auth
import AdmLogin from '../views/Auth/adm_login.vue'

//home
import Home from '../views/home.vue'


Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
	{path: '/', components: {header:Header, default: Home, footer:Footer}, 
		children:[
		{path:'', component: Home}
	
		]},


	{path: '/td-login', component: AdmLogin},
	{path: '/invoices/pdf/:id', component: InvoiceShow},
	{path: '/adm', components: { default: Admin, header:AdmHeader, footer:AdmFooter},

		children:[
		{path: 'invoices', component: InvoiceIndex},
		{path: 'invoices/:id', component: InvoiceShow}
		]}

	]
	
})
export default router