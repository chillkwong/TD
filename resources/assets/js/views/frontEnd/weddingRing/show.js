
	// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	import Appointment from '../../../components/appointment.vue'
	import Carousel from '../../../components/carousel.vue'
	import router from '../../../router'
	// import Flash from '../../helpers/flash'

		
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
				weddingRing:'',
				columns:[
				'unit_price',
                'metal',
                'sideStone',
                'stock',
                'name',
                'description',
                ]
				,
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
				return this.weddingRing.shoulder + ' shoulder, ' + this.weddingRing.prong + '  weddingRing' 
			},
			combinedWeddingRings(){ 
				var obj = []
				obj.push(this.weddingRing.wedding_rings[0])

				if (this.weddingRing.wedding_rings[1]) {
					obj.push(this.weddingRing.wedding_rings[1])
					}
				return obj
			}
		},
		methods: {
			fetchData(){
				get(`/api/weddingRings/${this.$route.fullPath.slice(18)}`)
				.then((res)=>{
					this.weddingRing = res.data.model
					this.customerItems = res.data.posts.invPosts
				})
			},
			
		}
	}