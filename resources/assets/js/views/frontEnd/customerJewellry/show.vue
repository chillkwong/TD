<template>
<div class="container">
	<div class="level">
	</div>
	<div class="tile is-vertical">
		<article class="tile is-child box is-primary">
			<div class="columns">
				<div class="column">
					<figure class="image"><img :src="`/images/${post.cover}`"></figure>
				</div>
			</div>
		</article>
	</div>

	

	<div class="tile box">
		<div class="tile notification is-primary">
				<p class="title">{{post.contents[0].content}}</p>
		</div>       
  	</div>

  	<div class="tile is-ancestor ">
  		<div class="tile is-parent is-4">
  			<div class="tile is-child box">

  				<div class="tile is-chill">
  				<article>
  					<p>客人珠寶首飾分享，可作參考。
					鑽石4Cs資料，

					更詳細資料，亦可到GIA官方網站查詢：
					</p>
					<a :href="`https://www.gia.edu/report-check?reportno=${invoice[0].inv_diamonds[0].certificate}`"><center>GIA Certificate</center><figure class="image"><img src="https://www.gia.edu/onlineopinionV5/GIA-Logo.png"></figure></a>
  				</article>
  				</div>
  				<article>
  					<table class="table is-striped is-fullwidth">
					<thead>
						<tr>
							<th>Diamond Info({{invoice[0].inv_diamonds[0].shape}})</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Carat Weight</td><td>{{invoice[0].inv_diamonds[0].weight}}</td></tr>
						<tr><td>Color Grade</td><td>{{invoice[0].inv_diamonds[0].color}}</td></tr>
						<tr><td>Clarity Grade</td><td>{{invoice[0].inv_diamonds[0].clarity}}</td></tr>
						<tr><td>Cut Grade</td><td>{{invoice[0].inv_diamonds[0].cut}}</td></tr>
					</tbody>

					<thead>
						<tr>
							<th>Finish</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Polish</td><td>{{invoice[0].inv_diamonds[0].polish}}</td></tr>
						<tr><td>Symmetry</td><td>{{invoice[0].inv_diamonds[0].symmetry}}</td></tr>
					</tbody>

					<thead>
						<tr>
							<th>Fluorescence</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Fluorescence</td><td>{{invoice[0].inv_diamonds[0].fluorescence}}</td></tr>
					</tbody>
  					
  					<thead>
						<tr>
							<th>Certificate</th>
						</tr>
					</thead>
  						
					<tbody>
						<a :href="`https://www.gia.edu/report-check?reportno=${invoice[0].inv_diamonds[0].certificate}`">
						<tr><td>Certificate</td><td>{{invoice[0].inv_diamonds[0].certificate}}</td></tr>
						</a>
					</tbody>

  					</table>
  				</article>

  				
  			</div>
  		</div>

  		<div class="tile is-parent">
  				<div class="tile is-child box">
  					<a :href="`https://www.gia.edu/report-check?reportno=${invoice[0].inv_diamonds[0].certificate}`">
	  					<figure class="image">
	  					<img :src="`/images/${post.image1}`">
	  					</figure>
  					</a>
  				</div>
  			</div>
  	</div>


  	<div class="tile is-ancestor notification is-primary">
  		<div class="tile is-parent">
  			<div class="tile is-child is-7">
  				<article>
  					<figure><img :src="`/images/${post.image2}`"></figure>
  				</article>
  				
  			</div>
  			<div class="tile is-child">
  				<article>
  					<figure><img src="/images/diamond/GIA-Laser-Inscription-girdle.jpg"></figure>
  					<p class="subtitle">
					鑽石腰部編號就好像是人的身份證，用來確認鑽石它的4Cs，到底是什麼那些級別。
					</p>
  				</article>
  				
  			</div>
  			
  		</div>
  		
  	</div>


  	<div class="tile is-ancestor">
  		<div class="tile is-parent is-6">
  				<div class="tile is-child box">
  					<router-link :to="'/adm/jewellries/' + invoice[0].jewellries[0].id">
	  					<figure class="image">
	  					<img :src="`/images/${invoice[0].jewellries[0].cover}`">
	  					</figure>
  					</router-link>
  					<router-link :to="'/adm/jewellries/' + invoice[0].jewellries[0].id">
	  					<figure class="image">
	  					<img :src="`/images/${invoice[0].jewellries[0].image1}`">
	  					</figure>
  					</router-link>
  				</div>
  			</div>
  		<div class="tile is-parent">
  			<div class="tile is-child box">
  				<article>
  					<div>
					  <p>
					    <iframe width="90%" height="315" :src="`https://www.youtube.com/embed/${invoice[0].jewellries[0].video}`" frameborder="0" allowfullscreen></iframe>
					  </p>
					 </div>
  					<table class="table is-striped is-fullwidth">
					<thead>
						<tr>
							<th>Jewellry Info</th>
						</tr>
					</thead>
  						
					<tbody>
						<tr><td>Stock No.</td><td>{{invoice[0].jewellries[0].stock}}</td></tr>	
						<tr><td>Title</td><td>{{invoice[0].jewellries[0].name}}</td></tr>
						<tr><td>Description</td><td>{{invoice[0].jewellries[0].description}}</td></tr>
						<tr><td>Side stone</td><td>{{invoice[0].jewellries[0].sideStone?'Yes':'No'}}</td></tr>
						<tr><td>Mounting</td><td>{{invoice[0].jewellries[0].mounting}}</td></tr>
					</tbody>

  					</table>
  				</article>

  				
  			</div>
  		</div>
  		
  	</div>

  	<nav class="level">
  		<p class="level-item has-text-centered">
	  	<label>Product video</label>
	 	</p>
  	</nav>
  	<nav class="level">
	  <p class="level-item has-text-centered">
	    <iframe width="90%" height="555" :src="`https://www.youtube.com/embed/${post.video}`" frameborder="0" allowfullscreen></iframe>
	  </p>
	 </nav>

  	<div class="tile box">
  		<router-link :to=" `/adm/customer-jewellries/${post.id}/edit`" class="button is-primary">
							Edit
		</router-link>
		<button class="button is-danger" @click="remove" :disable="isRemoving">Delete</button>
  	</div>
	
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
				post: {
					invoice: {},
					content: []
				},
				invoice: ''
			}
		},
		watch:{
			'$route':'fetchData'
		},
		beforeMount(){
			this.fetchData()
			
		},
		methods: {
			fetchData(){
				get(`/api/invPosts/${this.$route.params.id}`,this.$route.fullPath.slice(1,3))
				.then((res)=>{
					this.post = res.data.post
					this.invoice = res.data.invoice
				})
			},
			remove(){
				this.isRemoving = false
					del(`/api/invPosts/${this.$route.params.id}`)
					,then((res)=>{
						if (res.data.deleted) {
							Flash.setSuccess('You have successfully deleted recipe!')
							this.$router.push('/')
						}
					})
			}
		}
	}
</script>