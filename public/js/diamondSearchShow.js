
new Vue({
	function setIframeSrc() {
		  var s = "/images";
		  var iframe1 = document.getElementById('iframe1');
		  if ( -1 == navigator.userAgent.indexOf("MSIE") ) {
		    iframe1.src = s;
		  }
		  else {
		    iframe1.location = s;
		  }
		}
		setTimeout(setIframeSrc, 5);


		(function(d){
		  var iframe = d.body.appendChild(d.createElement('iframe')),
		  doc = iframe.contentWindow.document;

		  // style the iframe with some CSS
		  iframe.style.cssText = "position:absolute;width:200px;height:100px;left:0px;";
		  
		  doc.open().write('<body onload="' + 
		  'var d = document;d.getElementsByTagName(\'head\')[0].' + 
		  'appendChild(d.createElement(\'script\')).src' + 
		  '=\'\/path\/to\/file\'">');
		  
		  doc.close(); //iframe onload event happens

		  })(document);


	// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	import Appointment from '../../../components/appointment.vue'
	import Carousel from '../../../components/carousel.vue'
	// import Flash from '../../helpers/flash'

		
	export default {
		components: {Appointment, Carousel},
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
				get(`/api/diamonds/${this.$route.params.id}`)
				.then((res)=>{
					this.diamond = res.data.diamond
				})
			},
			
		}
	}

})