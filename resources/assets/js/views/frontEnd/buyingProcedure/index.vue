<template>
<div class="container">
	<div class="level">
	</div>

	

  	<p>hi</p>
  	
	
</div>
</template>

<script type="text/javascript">


	// import Auth from '../../store/auth'
	import { get, del } from '../../../helpers/api'
	// import Flash from '../../helpers/flash'

		
	export default {
		
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
				get(`/api/buyingProcedure`)
				.then((res)=>{
					this.weddingRing = res.data.model
					this.customerItems = res.data.posts.invPosts
				})
			},
			
		}
	}
</script>