// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	// import Flash from '../../helpers/flash'

	import router from '../../../router'

	import { transJs } from '../../../helpers/transJs'
	import langsDia from '../../../langs/diamondViewer'
	import langsEnga from '../../../langs/engagementRings'
	import langsWedd from '../../../langs/weddingRings'
	// import langs from '../../../langs/customerJewellry'
	
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
				youtube: 'https://www.youtube.com/embed/',
				langs: langsDia.concat(langsEnga,langsWedd),
				invoice: '',
				langHref : '/' + this.$route.fullPath.slice(1,3),
			}
		},
		watch:{
			'$route':'fetchData'
		},
		beforeMount(){
			this.fetchData()
		},
		computed:{
			locale(){
				
				if (this.$route.fullPath.slice(1,3) == 'en') {
					return 0
				}
				if (this.$route.fullPath.slice(1,3) == 'hk') {
					return 1
				}
				if (this.$route.fullPath.slice(1,3) == 'cn') {
					return 2
				}
			}
		},
		filters:{
				transJs,
		},
		methods: {
			transJsMet(data,ori,langs){
				return transJs(data,ori,langs)
			},
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