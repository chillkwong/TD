import { get } from '../../../helpers/api'
import router from '../../../router'

export default {
	el: '#aboutUs',
	router,		
	data(){
		return {
			activedSubTab: 'Appointment First',
		}
	},
	watch:{
		'$route': 'fetchData'
	},
	computed:{
		partialUrl(){
			return this.$route.fullPath.slice(4)
		}
	},
	beforeMount(){
		this.fetchData()
		console.log(this.$route.fullPath.slice(12))
		if (this.$route.fullPath.includes('buying-procedure')) {
			return this.activedSubTab = this.$route.fullPath.slice(20)?this.$route.fullPath.slice(20):'Appointment First'
		}
		
		if (this.$route.fullPath.includes('about-us')) {
			return this.activedSubTab = this.$route.fullPath.slice(12)?this.$route.fullPath.slice(12):'Contact Us'
		}

	
		this.activedSubTab = this.$route.fullPath.slice(20)?this.$route.fullPath.slice(20):'Appointment First'
	},
	methods:{
		activeSubTab(tab){
			this.activedSubTab = tab
		},
		fetchData(){
			get(`/api/buyingProcedure`)
			.then((res)=>{
				this.trans = res.data.trans
			})
		}
	}
}
