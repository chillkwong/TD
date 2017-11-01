<template>
<div class="container">
	<div class="level">
	</div>

	<div class="tile box">
		<div class="tile notification is-primary">
				<p class="title">{{engagementRing.shoulder}} Shoulder {{engagementRing.prong}} Engagement Ring</p>
		</div>       
  	</div>


  	<div class="tile is-ancestor ">

  		<div class="tile is-parent is-7">
  				<div class="tile is-child box">
	  					<figure class="image" @click="carouselState=!carouselState">
	  					<carousel @active="carouselState=!carouselState" :carouselActive="carouselState" :items="4" :height="'500'" :width="'100%'" :carouselUpperItems="engagementRing" :carouselItems="customerItems" carouselTitle="customer jewellries"></carousel>
	  					</figure>
  				</div>
  			</div>


  		<div class="tile is-parent is-5">
  			<div class="tile is-child box">

  				<div class="tile is-child">
  				<article>
  					<center>
  						<button class="button is-info" @click="appointmentState=!appointmentState">Appointment</button>
  						<appointment v-model="engagementRing" :title="appointmentTitle" @active="appointmentState=!appointmentState" :active="appointmentState" :columns="columns"  :processing="false"></appointment>
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
						<tr><td>Unit Price</td><td>${{engagementRing.unit_price}}</td></tr>
						<tr><td>Shoulder</td><td>{{engagementRing.shoulder}}</td></tr>
						<tr><td>Prong</td><td>{{engagementRing.prong}}</td></tr>
						<tr><td>Side Stone</td><td>{{engagementRing.sideStone}}</td></tr>
					</tbody>

					<thead>
						<tr>
							<th>More Details</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Stock</td><td>{{engagementRing.stock}}</td></tr>
						<tr><td>Name</td><td>{{engagementRing.name}}</td></tr>
						<tr><td>Description</td><td>{{engagementRing.description}}</td></tr>
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
				get(`/api/engagementRings/${this.$route.params.id}`)
				.then((res)=>{
					this.engagementRing = res.data.model
					this.customerItems = res.data.posts.invPosts
				})
			},
			
		}
	}
</script>

