


	// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	import Appointment from '../../../components/appointment.vue'
	import Carousel from '../../../components/carousel.vue'
	import router from '../../../router'

	// import Flash from '../../helpers/flash'
	import { transJs } from '../../../helpers/transJs'
	import langs from '../../../langs/diamondViewer'

		
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
				langs,
				text:{
					carat: 'carat',
					diamond: 'diamond',

				},
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
                'fluorescence',
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
		filters:{
			transJs,
		},
		computed: {
			appointmentTitle(){
				return this.diamond.weight + transJs(this.text.carat,this.langs,this.locale) +' ' + this.diamond.color +' '+ transJs(this.columns[3],this.langs,this.locale)+' ' + transJs(this.text.diamond,this.langs,this.locale) 
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
			},
			localeHref(){
				
				return this.$route.fullPath.slice(0,4)
					
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

