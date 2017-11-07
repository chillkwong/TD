// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	// import Flash from '../../helpers/flash'

	import router from '../../../router'

	import { transJs } from '../../../helpers/transJs'
	import langs from '../../../langs/customerJewellry'
	
	export default {
		el: '#customerJewellryShow',
		router,	
		data(){
			return {
				// auth: Auth.state,
				isRemoving: false,
				post: {
					invoice: {},
					content: []
				},
				invoice: ''
			}
		},
		watch:{
			'$route':'fetchData'
		},
		beforeMount(){
			this.fetchData()
			
		},
		methods: {
			fetchData(){
				get(`/api/invPosts/${this.$route.path.slice(24)}`,this.$route.fullPath.slice(1,3))
				.then((res)=>{
					this.post = res.data.post
					this.invoice = res.data.invoice
				})
			},
			remove(){
				this.isRemoving = false
					del(`/api/invPosts/${this.$route.path.slice(24)}`)
					.then((res)=>{
						if (res.data.deleted) {
							Flash.setSuccess('You have successfully deleted recipe!')
							this.$router.push('/')
						}
					})
			}
		}
	}