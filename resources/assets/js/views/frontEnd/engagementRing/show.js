	// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	import Appointment from '../../../components/appointment.vue'
	import Carousel from '../../../components/carousel.vue'
	import router from '../../../router'
	// import Flash from '../../helpers/flash'

		
	export default {
		el: '#engagementRingsShow',
		components: {Appointment, Carousel},
		router,
		data(){
			return {
				// auth: Auth.state,
				isRemoving: false,
				carouselState: false,
				appointmentState: false,
				title: '',
				engagementRing:'',
				columns:[
				'unit_price',
                'shoulder',
                'prong',
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
				return this.engagementRing.shoulder + ' shoulder, ' + this.engagementRing.prong + '  engagementRing' 
			}
		},
		methods: {
			fetchData(){
				get(`/api/engagementRings/${this.$route.fullPath.slice(21)}`)
				.then((res)=>{
					this.engagementRing = res.data.model
					this.customerItems = res.data.posts.invPosts
				})
			},
			
		}
	}