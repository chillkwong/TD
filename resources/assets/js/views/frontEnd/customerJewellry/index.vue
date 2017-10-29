<template>
	<div class="box">
		<div class="columns">
			<div class="column">
			</div>
		</div>

		
		<div class="tile is-ancestor"v-for="pos in posts">
			<div class="tile is-parent is-4" v-for="post in pos">
				<div class="tile is-child" v-if="post">
					<article class="tile">
						<router-link :to="$route.path +'/' + post.id" >
							<img :src="`/images/${post.cover}`" v-if="post.cover">
							<center>
							<p class="subtitle" v-if="post.contents[0]">{{post.contents[0].content}}</p>
						</center>
						</router-link>
						
					</article>
				</div>
			</div>
		</div>


	</div>
</template>

<script type="text/javascript">

import { get } from '../../../helpers/api'
	
export default {
	data(){
		return {
			posts: []
		}
	},
	watch:{
		'$route': 'fetchData'
	},
	beforeMount(){
		this.fetchData()
	},
	methods:{
		fetchData(){
			get(`/api/invPosts`, this.$route.fullPath.slice(1,3))
			.then((res)=>{
				this.posts = res.data.posts
			})
		}
	}
}
</script>