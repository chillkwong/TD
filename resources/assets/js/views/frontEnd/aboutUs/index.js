import { get } from '../../../helpers/api'

export default {
	el: '#aboutUs',
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
