<template>
	<div class="box">
		<div class="columns">
			<div class="column" v-for="post in posts">
				<router-link :to="`/posts/${post.id}`" >
					<img v-for="image in post.images" :src="`/images/${image}`" v-if="image">
					<p class="subtitle">{{post}}</p>
				</router-link>
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
	created(){
		get(`/api/posts`)
		.then((res)=>{
			this.posts = res.data.posts
		})
	}
}
</script>