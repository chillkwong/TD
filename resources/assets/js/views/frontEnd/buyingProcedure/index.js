import { get } from '../../../helpers/api'

export default {
	el: '#buyingProcedure',
	data(){
		return {
			trans: []
		}
	},
	watch:{
		'$route': 'fetchData'
	},
	beforeMount(){
		this.fetchData()
	},
	methods:{
		fetchData(){
			get(`/api/buyingProcedure`)
			.then((res)=>{
				this.trans = res.data.trans
			})
		}
	}
}
