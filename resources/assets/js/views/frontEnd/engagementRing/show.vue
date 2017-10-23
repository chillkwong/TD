<template>
<div class="container">
	<div class="level">
	</div>

	<div class="tile box">
		<div class="tile notification is-primary">
				<p class="title">{{diamond.weight}} carat {{diamond.shape}} diamond</p>
		</div>       
  	</div>


  	<div class="tile is-ancestor ">

  		<div class="tile is-parent is-7">
  				<div class="tile is-child box">
	  					<figure class="image" @click="carouselState=!carouselState">
	  					<carousel @active="carouselState=!carouselState" :carouselActive="carouselState" :items="4" :height="'500'" :width="'100%'" :carouselItems="images"></carousel>
	  					</figure>
  				</div>
  			</div>


  		<div class="tile is-parent is-5">
  			<div class="tile is-child box">

  				<div class="tile is-child">
  				<article>
  					<center>
  						<button class="button is-info" @click="appointmentState=!appointmentState">Appointment</button>
  						<appointment v-model="diamond" :appTitle="appointmentTitle" @active="appointmentState=!appointmentState" :appointActive="appointmentState" :columns="columns" :storeURL="storeURL" :isProcessing="false"></appointment>
  					</center>
  					<br>
  					<p>
					For more detailed information, can reach GIA website query：
					</p>
					<a :href="`https://www.gia.edu/report-check?reportno=${diamond.certificate}`">
						<center>GIA Certificate</center>
						<figure class="image">
							<img src="https://www.gia.edu/onlineopinionV5/GIA-Logo.png">
						</figure>
					</a>
  				</article>
  				</div>
  				<article>
  					<table class="table is-striped is-fullwidth">
					<thead>
						<tr>
							<th>Diamond Info({{diamond.shape}})</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Carat Weight</td><td>{{diamond.weight}}</td></tr>
						<tr><td>Color Grade</td><td>{{diamond.color}}</td></tr>
						<tr><td>Clarity Grade</td><td>{{diamond.clarity}}</td></tr>
						<tr><td>Cut Grade</td><td>{{diamond.cut}}</td></tr>
					</tbody>

					<thead>
						<tr>
							<th>Finish</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Polish</td><td>{{diamond.polish}}</td></tr>
						<tr><td>Symmetry</td><td>{{diamond.symmetry}}</td></tr>
					</tbody>

					<thead>
						<tr>
							<th>Fluorescence</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Fluorescence</td><td>{{diamond.fluorescence}}</td></tr>
					</tbody>
  					
  					<thead>
						<tr>
							<th>Certificate</th>
						</tr>
					</thead>
  						
					<tbody>
						<a :href="`https://www.gia.edu/report-check?reportno=${diamond.certificate}`">
						<tr><td>Certificate</td><td>{{diamond.certificate}}</td></tr>
						</a>
					</tbody>

  					</table>
  				</article>

  				
  			</div>
  		</div>

  	</div>

  	
  

  	
	
</div>
</template>

<script type="text/javascript">

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
				carouselState: false,
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
				images:[
				{	thumb: '/images/3jN5QkTg9IJUyVjm.jpeg',
					src:'/images/qKrPCgDCyA6mxwq8.jpeg',
					type:'img'},
				{	thumb: '/images/5JzYsN9QpvnUqlxT.jpeg',
					src: 'http://www.youtube.com/embed/WsFWhL4Y84Y',
					type:'video'},
				{	thumb: '/images/3jN5QkTg9IJUyVjm.jpeg',
					src:'/images/qKrPCgDCyA6mxwq8.jpeg',
					type:'img'},
				{	thumb: '/images/5JzYsN9QpvnUqlxT.jpeg',
					src: 'http://www.youtube.com/embed/WsFWhL4Y84Y',
					type:'video'},	
				
					]
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