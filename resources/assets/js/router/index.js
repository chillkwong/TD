import Vue from 'vue'
import VueRouter from 'vue-router'

//layouts
import Header from '../views/layouts/header.vue'
import Footer from '../views/layouts/footer.vue'

//admin layouts
import AdmHeader from '../views/adm/header.vue'
import AdmFooter from '../views/adm/footer.vue'
import Admin from '../views/adm/index.vue'
import AdmMain from '../views/adm/main.vue'

//admin dashboard

//invoice
import InvoiceIndex from '../views/invoice/index.vue'
import InvoiceShow from '../views/invoice/show.vue'
import InvoiceForm from '../views/invoice/form.vue'

//invoice
import CusomterIndex from '../views/customer/index.vue'
import CustomerShow from '../views/customer/show.vue'
import CustomerForm from '../views/customer/form.vue'


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
		{path:'', component: AdmMain},

		{path: 'invoices', component: InvoiceIndex},
		{path: 'invoices/create', component: InvoiceForm},
		{path: 'invoices/:id', component: InvoiceShow},
		{path: 'invoices/:id/edit', component: InvoiceForm, meta:{mode:'edit'}},

		{path: 'customers', component: CusomterIndex},
		{path: 'customers/create', component: CustomerForm},
		{path: 'customers/:id', component: CustomerShow},
		{path: 'customers/:id/edit', component: CustomerForm, meta:{mode:'edit'}}


		]}

	]
	
})
export default router