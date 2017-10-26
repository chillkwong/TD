<template>
<div class="container">
	<div class="level">
	</div>

	<div class="tile box">
		<div class="tile notification is-primary">
				<p class="title">{{weddingRing.shoulder}} Shoulder {{weddingRing.prong}} Engagement Ring</p>
		</div>       
  	</div>


  	<div class="tile is-ancestor ">

  		<div class="tile is-parent is-7">
  				<div class="tile is-child box">
	  					<figure class="image" @click="carouselState=!carouselState">
	  					<carousel @active="carouselState=!carouselState" :carouselActive="carouselState" :items="4" :height="'500'" :width="'100%'" :carouselUpperItems="combinedWeddingRings" :carouselItems="customerItems" carouselTitle="customer jewellries"></carousel>
	  					</figure>
  				</div>
  			</div>


  		<div class="tile is-parent is-5">
  			<div class="tile is-child box">

  				<div class="tile is-child">
  				<article>
  					<center>
  						<button class="button is-info" @click="appointmentState=!appointmentState">Appointment</button>
  						<appointment v-model="weddingRing" :appTitle="appointmentTitle" @active="appointmentState=!appointmentState" :appointActive="appointmentState" :columns="columns"  :isProcessing="false"></appointment>
  					</center>
  					<br>
  					<p>
					For more detailed information, can reach GIA website query：
					</p>
  				</article>
  				</div>
  				<article>
  					<table class="table is-striped is-fullwidth">
					<thead>
						<tr>
							<th>Engagement Ring Info</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Unit Price</td><td>${{weddingRing.unit_price}}</td></tr>
						<tr><td>Shoulder</td><td>{{weddingRing.shoulder}}</td></tr>
						<tr><td>Prong</td><td>{{weddingRing.prong}}</td></tr>
						<tr><td>Side Stone</td><td>{{weddingRing.sideStone}}</td></tr>
					</tbody>

					<thead>
						<tr>
							<th>More Details</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Stock</td><td>{{weddingRing.stock}}</td></tr>
						<tr><td>Name</td><td>{{weddingRing.name}}</td></tr>
						<tr><td>Description</td><td>{{weddingRing.description}}</td></tr>
					</tbody>

  					</table>
  				</article>

  				
  			</div>
  		</div>

  	</div>

  	
  

  	
	
</div>
</template>

<script type="text/javascript">


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
				carouselState: false,
				appointmentState: false,
				title: '',
				weddingRing:'',
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
				get(`/api/weddingRings/${this.$route.params.id}`)
				.then((res)=>{
					this.weddingRing = res.data.model
					this.customerItems = res.data.posts.invPosts
				})
			},
			
		}
	}
</script>


<style>
body, html {
  height: 100%;
  margin: 0;
  color: #777;
}
.cut-bg, .clarity-bg, .bgimg-3 {
  position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.cut-bg {
    /* The image used */
    background-image: url("/front_end/diamond_show/diamond_cut.jpg");

    /* Full height */
    height: 100%; 

}
.clarity-bg {
    /* The image used */
    background-image: url("/front_end/diamond_show/diamond_clarity.jpg");

    /* Full height */
    height: 100%; 

}
.caption {
  left: 0;
  top: 50%;
  width: 100%;
  text-align: left;
  color: #000;
  padding: 80px;
}

.caption span.border {
  color: #fff;
  font-size: 25px;
  border: 40px;
}

.caption span.cut-text {
  font-weight: bold;
  width: 80px;
  text-align: left;
  color: #fff;
  font-size: 15px;
  border: 40px;
}
</style>