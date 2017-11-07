import { get } from '../../../helpers/api'
import router from '../../../router'

import { transJs } from '../../../helpers/transJs'
import langs from '../../../langs/customerJewellry'

export default {
		el: '#customerJewellryIndex',
		router,	
	data(){
		return {
			posts: []
		}
	},
	watch:{
		'$route': 'fetchData'
	},
	beforeMount(){
		this.fetchData()
	},
	methods:{
		clickRow(row,index){
				this.onClickedRow = row.id
				window.open('customer-jewellries/'+row.id, '_self')
			},
		fetchData(){
			get(`/api/invPosts`, this.$route.fullPath.slice(1,3))
			.then((res)=>{
				this.posts = res.data.posts
			})
		}
	}
}