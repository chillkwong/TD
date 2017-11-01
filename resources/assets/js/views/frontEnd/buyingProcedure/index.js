import { get } from '../../../helpers/api'

export default {
	el: '#buyingProcedure',
	data(){
		return {
			activedSubTab: 'Appointment First',
		}
	},
	watch:{
		'$route': 'fetchData'
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
