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


//Customer
import CusomterIndex from '../views/customer/index.vue'
import CustomerShow from '../views/customer/show.vue'
import CustomerForm from '../views/customer/form.vue'

//invoice
import InvoiceIndex from '../views/invoice/index.vue'
import InvoiceShow from '../views/invoice/show.vue'
import InvoiceForm from '../views/invoice/form.vue'

//invoice
// import ItemIndex from '../views/item/index.vue'
// import ItemShow from '../views/item/show.vue'
// import ItemForm from '../views/item/form.vue'

//invoice diamonds
import InvDiamondIndex from '../views/invdiamond/index.vue'
import InvDiamondShow from '../views/invdiamond/show.vue'
import InvDiamondForm from '../views/invdiamond/form.vue'

//invoice diamonds
import JewellryIndex from '../views/jewellry/index.vue'
import JewellryShow from '../views/jewellry/show.vue'
import JewellryForm from '../views/jewellry/form.vue'

//customer Jewellries
import CustomerJewIndex from '../views/customerJewellry/index.vue'
import CustomerJewShow from '../views/customerJewellry/show.vue'
import CustomerJewForm from '../views/customerJewellry/form.vue'

//Post
import PostIndex from '../views/post/index.vue'
import PostShow from '../views/post/show.vue'
import PostForm from '../views/post/form.vue'

//diamonds
import DiamondForm from '../views/backEnd/diamondViewer/form.vue'


//Auth
import AdmLogin from '../views/Auth/adm_login.vue'

//home
import Home from '../views/home.vue'


Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
	{path: '/', components: {header:Header, default: Home, footer:Footer} },

	{path: '/td-login', component: AdmLogin},
	{path: '/invoices/pdf/:id', component: InvoiceShow},
	{path: '/adm', components: { default: Admin, header:AdmHeader, footer:AdmFooter},

		children:[
		{path:'', component: AdmMain},

		{path: 'customers', component: CusomterIndex},
		{path: 'customers/create', component: CustomerForm},
		{path: 'customers/:id', component: CustomerShow},
		{path: 'customers/:id/edit', component: CustomerForm, meta:{mode:'edit'}},

		{path: 'invoices', component: InvoiceIndex},
		{path: 'invoices/create', component: InvoiceForm},
		{path: 'invoices/:id', component: InvoiceShow},
		{path: 'invoices/:id/edit', component: InvoiceForm, meta:{mode:'edit'}},

		// {path: 'items', component: ItemIndex},
		// {path: 'items/create', component: ItemForm},
		// {path: 'items/:id', component: ItemShow},
		// {path: 'items/:id/edit', component: ItemForm, meta:{mode:'edit'}},

		{path: 'diamonds/create', component: DiamondForm},

		{path: 'inv-diamonds', component: InvDiamondIndex},
		{path: 'inv-diamonds/create', component: InvDiamondForm},
		{path: 'inv-diamonds/:id', component: InvDiamondShow},
		{path: 'inv-diamonds/:id/edit', component: InvDiamondForm, meta:{mode:'edit'}},

		{path: 'jewellries', component: JewellryIndex},
		{path: 'jewellries/create', component: JewellryForm, meta: {mode: 'create'}},
		{path: 'jewellries/:id', component: JewellryShow},
		{path: 'jewellries/:id/edit', component: JewellryForm, meta:{mode:'edit'}},

		{path: 'posts', component: PostIndex},
		{path: 'posts/create', component: PostForm, meta: {mode: 'create'}},
		{path: 'posts/:id/edit', component: PostForm, meta: {mode: 'edit'}},
		{path: 'posts/:id', component: PostShow},

		
		{path: 'customer-jewellries/create', component: CustomerJewForm, meta: {mode: 'create'}},
		{path: 'customer-jewellries/:id/create', component: CustomerJewForm, meta: {mode: 'create'}},
		{path: 'customer-jewellries/:id/edit', component: CustomerJewForm, meta: {mode: 'edit'}},
		// {path: 'customer-jewellries/:id', component: CustomerJewShow},

		]},



	]
	
})
export default router