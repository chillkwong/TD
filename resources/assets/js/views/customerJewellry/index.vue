<template>
	<div class="box">
		<div class="columns">
			<div class="column">
			</div>
		</div>

		<div class="tile ancestor">
			<div class="tile is-parent is-4" v-for="post in posts">
				<div class="tile is-child box">
					<article class="tile">
						<router-link :to="$route.path +'/' + post.id" >
							<img :src="`/images/${post.cover}`" v-if="post.cover">
							<p class="subtitle">{{post.contents[0].content}}</p>
						</router-link>
						
					</article>
				</div>
			</div>		

		</div>
	</div>
</template>

<script type="text/javascript">

import { get } from '../../helpers/api'
	
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