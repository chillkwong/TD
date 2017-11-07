import Vue from 'vue'
import VueRouter from 'vue-router'

//layouts
import Header from '../views/layouts/header.vue'
import Footer from '../views/layouts/footer.vue'

//admin layouts
import AdmHeader from '../views/backEnd/adm/header.vue'
// import AdmFooter from '../views/adm/footer.vue'
// import Admin from '../views/adm/index.vue'
// import AdmMain from '../views/adm/main.vue'

//admin dashboard


// //Customer
// import CusomterIndex from '../views/customer/index.vue'
// import CustomerShow from '../views/customer/show.vue'
// import CustomerForm from '../views/customer/form.vue'

// //invoice
// import InvoiceIndex from '../views/invoice/index.vue'
// import InvoiceShow from '../views/invoice/show.vue'
// import InvoiceForm from '../views/invoice/form.vue'

//invoice
// import ItemIndex from '../views/item/index.vue'
// import ItemShow from '../views/item/show.vue'
// import ItemForm from '../views/item/form.vue'

// //invoice diamonds
// import InvDiamondIndex from '../views/invdiamond/index.vue'
// import InvDiamondShow from '../views/invdiamond/show.vue'
// import InvDiamondForm from '../views/invdiamond/form.vue'

//invoice diamonds
import JewellryIndex from '../views/backEnd/jewellry/index.vue'
import JewellryShow from '../views/backEnd/jewellry/show.vue'
// import JewellryForm from '../views/jewellry/form.vue'

//customer Jewellries
// import CustomerJewIndex from '../views/frontEnd/customerJewellry/index.vue'
// import CustomerJewShow from '../views/frontEnd/customerJewellry/show.vue'
// import CustomerJewForm from '../views/customerJewellry/form.vue'

//Diamonds
// import DiamondViewer from '../views/frontEnd/diamondViewer/index.vue'
// import DiamondShow from '../views/frontEnd/diamondViewer/show.vue'


//Engagement Rings
// import EngagementRingIndex from '../views/frontEnd/engagementRing/index.vue'
// import EngagementRingShow from '../views/frontEnd/engagementRing/show.vue'
// import CustomerJewForm from '../views/customerJewellry/form.vue'


//Wedding Rings
// import WeddingRingIndex from '../views/frontEnd/weddingRing/index.vue'
import WeddingRingShow from '../views/frontEnd/weddingRing/show.vue'
// import CustomerJewForm from '../views/customerJewellry/form.vue'

//Page
//buying procedure
// import BuyingProcedure from '../views/frontEnd/buyingProcedure/index.vue'

// //Post
// import PostIndex from '../views/post/index.vue'
// import PostShow from '../views/post/show.vue'
// import PostForm from '../views/post/form.vue'


//Auth
import AdmLogin from '../views/backEnd/Auth/adm_login.vue'

//home
import Home from '../views/home.vue'


Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
	{path: '/', components: {header:Header, default: Home, footer:Footer}, 

		children:[
		{path:'',  },
		// {path:'/posts/:id', component:PostIndex },

		// {path: 'customer-jewellries', component: CustomerJewIndex},
		// {path: 'customer-jewellries/:id', component: CustomerJewShow},

		//diamonds
		// {path: 'gia-loose-diamonds/', component: DiamondViewer},
		// {path: 'gia-loose-diamonds/:id', component: DiamondShow},
	
		]},

	{path: '/en', components: {header:Header, default: Home, footer:Footer}, 
		children:[
		{path:'',  },
		// {path:'/posts/:id', component:PostIndex },

		// {path: 'customer-jewellries', component: CustomerJewIndex},
		// {path: 'customer-jewellries/:id', component: CustomerJewShow},

		//diamonds
		// {path: 'gia-loose-diamonds/', component: DiamondViewer},
		// {path: 'gia-loose-diamonds/:id', component: DiamondShow},

		//engagement rings
		// {path: 'engagement-rings/', component: EngagementRingIndex},
		// {path: 'engagement-rings/:id', component: EngagementRingShow},

		//Wedding rings
		// {path: 'wedding-rings/', component: WeddingRingIndex},
		// {path: 'wedding-rings/:id', component: WeddingRingShow},

		//buying procedure
		// {path: 'buying-procedure/', component: BuyingProcedure},

		]},


	{path: '/hk', components: {header:Header, default: Home, footer:Footer}, 
		children:[
		{path:'',  },

		// {path: 'customer-jewellries', component: CustomerJewIndex},
		// {path: 'customer-jewellries/:id', component: CustomerJewShow},

		//diamonds
		// {path: 'gia-loose-diamonds/', component: DiamondViewer},
		// {path: 'gia-loose-diamonds/:id', component: DiamondShow},

		//engagement rings
		// {path: 'engagement-rings/', component: EngagementRingIndex},
		// {path: 'engagement-rings/:id', component: EngagementRingShow},
	
		]},


	{path: '/cn', components: {header:Header, default: Home, footer:Footer}, 
		children:[
		{path:'', },
		
		// {path: 'customer-jewellries', component: CustomerJewIndex},
		// {path: 'customer-jewellries/:id', component: CustomerJewShow},
		
		//diamonds
		// {path: 'gia-loose-diamonds/', component: DiamondViewer},
		// {path: 'gia-loose-diamonds/:id', component: DiamondShow},

		//engagement rings
		// {path: 'engagement-rings/', component: EngagementRingIndex},
		// {path: 'engagement-rings/:id', component: EngagementRingShow},
	
		]},

	]
	
})
export default router