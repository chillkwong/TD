
	// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	import Appointment from '../../../components/appointment.vue'
	import Carousel from '../../../components/carousel.vue'
	import router from '../../../router'
	// import Flash from '../../helpers/flash'
	import { transJs } from '../../../helpers/transJs'
	import langs from '../../../langs/weddingRings'

		
	export default {
		el:'#weddingRingsShow',
		router,
		components: {Appointment, Carousel},
		data(){
			return {
				// auth: Auth.state,
				isRemoving: false,
				carouselState: false,
				appointmentState: false,
				title: '',
				langs,
				weddingRing:'',
				columns:[
				'unit_price',
                'metal',
                'ct',
                'stock',
                'name',
                'description',
                ]
				,
				text:{
					weddingRing: 'Wedding Ring', 
				},
				storeURL: '',
				customerItems: '',
			}
		},
		watch:{
			'$route':'fetchData'
		},
		beforeMount(){
			this.fetchData()
			
		},
		computed: {
			appointmentTitle(){
				return transJs(this.weddingRing.wedding_rings[0].style,this.langs,this.locale)  + ' ' + transJs(this.weddingRing.wedding_rings[0].metal,this.langs,this.locale)  + transJs(this.text.weddingRing,this.langs,this.locale) 
			},
			combinedWeddingRings(){ 
				var obj = []
				obj.push(this.weddingRing.wedding_rings[0])

				if (this.weddingRing.wedding_rings[1]) {
					obj.push(this.weddingRing.wedding_rings[1])
					}
				return obj
			},
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
			fetchData(){
				get(`/api/weddingRings/${this.$route.fullPath.slice(18)}`)
				.then((res)=>{
					this.weddingRing = res.data.model
					this.customerItems = res.data.posts.invPosts
				})
			},
			transJsMet(data,ori,langs){
				return transJs(data,ori,langs)
			},
			
		}
	}