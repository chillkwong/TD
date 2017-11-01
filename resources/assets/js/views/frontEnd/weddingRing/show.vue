<template>
<div class="container">
	<div class="level">
	</div>

	<div class="tile box">
		<div class="tile notification is-primary">
				<p class="title">{{weddingRing.wedding_rings[0].description}} Wedding Rings</p>
		</div>       
  	</div>


  	<div class="tile is-ancestor ">

  		<div class="tile is-parent is-7">
  				<div class="tile is-child box">
	  					<figure class="image" @click="carouselState=!carouselState">
	  					<carousel @active="carouselState=!carouselState" :active="carouselState"  :height="'500'" :width="'100%'" :upperitems="combinedWeddingRings" :items="customerItems" title="customer jewellries"></carousel>
	  					</figure>
  				</div>
  			</div>


  		<div class="tile is-parent is-5">
  			<div class="tile is-child box">

  				<div class="tile is-child">
  				<article>
  					<center>
  						<button class="button is-info" @click="appointmentState=!appointmentState">Appointment</button>
  						<appointment v-model="weddingRing.wedding_rings[0]" :title="appointmentTitle" @active="appointmentState=!appointmentState" :active="appointmentState" :columns="columns"  :processing="false"></appointment>
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
							<th>Wedding Rings Info</th><th v-if="weddingRing.wedding_rings[1]">Men</th><th v-if="weddingRing.wedding_rings[1]">Female</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Unit Price</td><td>${{weddingRing.wedding_rings[0].unit_price}}</td><td v-if="weddingRing.wedding_rings[1]">${{weddingRing.wedding_rings[1].unit_price}}</td></tr>
						<tr><td>Metal</td><td>{{weddingRing.wedding_rings[0].metal}}</td><td v-if="weddingRing.wedding_rings[1]">{{weddingRing.wedding_rings[1].metal}}</td></tr>
						<tr><td>Side Stone</td><td>{{weddingRing.wedding_rings[0].sideStone}}</td><td v-if="weddingRing.wedding_rings[1]">{{weddingRing.wedding_rings[1].sideStone}}</td></tr>
					</tbody>

					<thead>
						<tr>
							<th colspan="3">More Details</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Stock</td><td>{{weddingRing.wedding_rings[0].stock}}</td><td v-if="weddingRing.wedding_rings[1]">{{weddingRing.wedding_rings[1].stock}}</td></tr>
						<tr><td>Name</td><td>{{weddingRing.wedding_rings[0].name}}</td><td v-if="weddingRing.wedding_rings[1]">{{weddingRing.wedding_rings[1].name}}</td></tr>
						<tr><td>Description</td><td>{{weddingRing.wedding_rings[0].description}}</td><td v-if="weddingRing.wedding_rings[1]">{{weddingRing.wedding_rings[1].description}}</td></tr>
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