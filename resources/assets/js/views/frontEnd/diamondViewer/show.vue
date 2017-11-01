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

  		<div class="tile is-parent">
  				<div class="tile is-child box">
  					<a :href="`https://www.gia.edu/report-check?reportno=${diamond.certificate}`">
	  					
	  					<figure class="image">
	  					<div v-if="diamond.imageLink">
	  						<iframe id="iframe1" :src="diamond.imageLink" width="100%" height="500" ></iframe>
	  					</div>
	  					<div v-if="diamond.imageLink == null">
	  						<img src="/front_end/diamond_show/RoundDiamonds_sample.png" width="100%" height="500"></img>
	  					</div>
	  					</figure>
  					</a>
  				</div>
  			</div>


  		<div class="tile is-parent is-5">
  			<div class="tile is-child box">

  				<div class="tile is-child">
  				<article>
  					<center>
  						<button class="button is-info" @click="appointmentState=!appointmentState">Appointment</button>
  						<appointment v-model="diamond" :appTitle="appointmentTitle" @active="appointmentState=!appointmentState" :appointActive="appointmentState" :columns="columns"  :isProcessing="false"></appointment>
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

  	
  	<div class="cut-bg">
	  	<div class="caption">
	  		<span class="border">Cut Grade: {{diamond.cut}}</span>
	  		<hr>
	  		<span class="cut-text">Highest cut grade. Its proportions produce a beautiful balance of fire and sparkle in a diamond.
	  		<br>
	  		</span>
	  		<span class="cut-text">Want to learn even more about cut? Learn More<br>
	  		</span>
	  		<span class="cut-text">
				A cut grade is the measure of a diamond's light performance. Cut with proper proportions, light is returned out of the top of the diamond. If it is cut too shallow, light leaks out of the bottom; too deep and it escapes out of the side.
	  		</span>
	  	</div>
	</div>

	<div class="tile is-ancestor ">

  		<div class="tile is-parent">
  				<div class="tile is-child box">
  				
  				<article>
  					<div class="columns">
  						<div class="column is-6">
	  						<center>
	  							<p1 class="title is-5 is-info">
			  						DIAMOND SIZE: {{diamond.weight}} Carat
			  					</p1>
			  					<br>
			  				</center>
	  					</div>
	  				</div>

  					<div class="columns">
  						<div class="column is-6">
  							<center><p1 class="subtitle is-6">
		  						The international unit of weight used for measuring diamonds and gemstones, 1 carat is equal to 200 milligrams, or 0.2 grams. A specific measurement of a diamond's weight, carat weight alone may not accurately represent a diamond's visual size.
		  					</p1>
		  					</center>
		  					
  						</div>
  						<div class="column is-6">
  							<center><p1 class="subtitle is-6">
		  						We recommend considering carat weight along with two other influential characteristics: the overall dimensions and the cut grade of the diamond.
		  					</p1>
		  					</center>
		  					<center><a >
		  						Learn More
		  					</a>
		  					</center>
		  					
  						</div>
  						<br>
  					</div>
  					<img src="/front_end/diamond_show/diamond_weight.jpg">
  				</article>


  			<hr>


  				<article>
  					<div class="columns">
  						<div class="column is-6">
	  					
	  						<center>
	  							<p1 class="title is-5 is-primary">
			  						Diamond Color: {{diamond.color}} 
			  					</p1>
			  					<br>
			  				</center>
	  					
	  					</div>
	  				</div>

  					<div class="columns">
  						<div class="column is-6">
  							<center><p1 class="subtitle is-6">
		  						The highest "near-colourless" grade. Colour may be detectable when compared to much higher "colourless" grades. Excellent value.
		  						<center>
		  						Want to learn even more about colour?
		  						<a >
		  						Learn More
			  					</a>
			  					</center>
		  					</p1>
		  					</center>
		  					
  						</div>
  						<div class="column is-6">
  							<center>
  								<p1 class="subtitle is-6">
		  							<li>For the purist, look for a colourless diamond with a grade of D-F for a diamond with no discernible colour.
		  							</li>
		  						</p1>
		  						<br>
  								<p1 class="subtitle is-6">
		  							<li>For an excellent value in a diamond with little or no noticeable colour to the unaided eye, look for a near-colourless grade of G-I
		  							</li>
		  						</p1>
		  					</center>
		  					
  						</div>
  						<br>
  					</div>
  					<img src="/front_end/diamond_show/diamond_color.jpg">
  				</article>

  			</div>
  		</div>

  	</div>

  	<div class="clarity-bg">
	  	<div class="caption">
	  		<span class="border">Clarity: {{diamond.clarity}}</span>
	  		<hr>
	  		<span class="cut-text">VS1-VS2: Very slightly included. Minor inclusions ranging from difficult (VS1) to somewhat easy (VS2) to see at 10x magnification.
	  		<br>
	  		</span>
	  		<span class="cut-text">
	  			Want to learn even more about clarity?
	  			<br>
	  			<a >
					Learn More
				</a>
	  		</span>
	  		<span class="cut-text">
				<li>Clarity refers to a diamond's relative absence of tiny, natural characteristics known as blemishes and inclusions.
				</li>
				<li>
				Many of these characteristics are microscopic and do not affect a diamond's beauty in any discernible way.</li>
	  		</span>
	  	</div>
	</div>
	<carousel :carouselItems="images"></carousel>
	
</div>
</template>

<script type="text/javascript">

	// function setIframeSrc() {
	// 	  var s = "/images";
	// 	  var iframe1 = document.getElementById('iframe1');
	// 	  if ( -1 == navigator.userAgent.indexOf("MSIE") ) {
	// 	    iframe1.src = s;
	// 	  }
	// 	  else {
	// 	    iframe1.location = s;
	// 	  }
	// 	}
	// 	setTimeout(setIframeSrc, 5);


	// 	(function(d){
	// 	  var iframe = d.body.appendChild(d.createElement('iframe')),
	// 	  doc = iframe.contentWindow.document;

	// 	  // style the iframe with some CSS
	// 	  iframe.style.cssText = "position:absolute;width:200px;height:100px;left:0px;";
		  
	// 	  doc.open().write('<body onload="' + 
	// 	  'var d = document;d.getElementsByTagName(\'head\')[0].' + 
	// 	  'appendChild(d.createElement(\'script\')).src' + 
	// 	  '=\'\/path\/to\/file\'">');
		  
	// 	  doc.close(); //iframe onload event happens

	// 	  })(document);


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