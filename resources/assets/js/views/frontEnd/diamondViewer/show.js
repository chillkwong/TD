


	// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	import Appointment from '../../../components/appointment.vue'
	import Carousel from '../../../components/carousel.vue'
	import router from '../../../router'

	// import Flash from '../../helpers/flash'

		
	export default {
		el:'#diamondViewerShow',
		components: {Appointment, Carousel},
		router,
		data(){
			return {
				// auth: Auth.state,
				isRemoving: false,
				appointmentState: false,
				title: '',
				diamond:{
					weight:'',
				},
				columns:[
				'price',
                'shape',
                'weight',
                'color',
                'clarity',
                'cut',
                'polish',
                'symmetry',
                'fluroscence',
                'certificate',
                'lab'
                ]
				,
				storeURL: '/api/diamonds/appointment',
				
				post: {
					invoice: {},
					content: []
				},
				invoice: '',
				
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
				return this.diamond.weight + 'carat, ' + this.diamond.color + ' color diamond' 
			}
		},
		methods: {
			fetchData(){
				get(`/api/diamonds/${this.$route.path.slice(23)}`)
				.then((res)=>{
					this.diamond = res.data.diamond
				})
			},
			
		}
	}

