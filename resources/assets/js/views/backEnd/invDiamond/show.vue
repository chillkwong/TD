<template>
	<div class="container">
		<nav class="level">
		
		</nav>
		<div class="columns is-centered">
			<div class="column is-9">
				<p class="title is-2">Diamond ID :{{model.id}}</p>
			</div>
			<div class="column is-3">
				<router-link :to="'/adm/inv-diamonds/' + model.id + '/edit'" class="button is-primary">Edit </router-link>
				
			</div>
		</div>
		<div class="columns">
			<div class="column is-3">
				<label>Price</label>
				<p class="subtitle is-5">${{model.price}}</p>
			</div>
			<div class="column is-1">
				<label>Stock</label>
				<p class="subtitle is-5">{{model.stock}}</p>
			</div>
			<div class="column is-2">
				<label>Clarity</label>
				<p class="subtitle is-5">{{model.clarity}}</p>
			</div>
			<div class="column is-3">
				<label>Weight</label>
				<p class="subtitle is-5">{{model.weight}}</p>
			</div>
			<div class="column is-3">
				<label>Color</label>
				<p class="subtitle is-5">{{model.color}}</p>
			</div>
			
			
		</div>
		<hr>
		<div class="columns">
			<div class="column is-1">
				<label>Cut</label>
				<p class="subtitle is-5">{{model.cut}}</p>
			</div>	
			<div class="column is-1">
				<label>Polish</label>
				<p class="subtitle is-5">{{model.polish}}</p>
			</div>
			<div class="column is-1">
				<label>Symmetry</label>
				<p class="subtitle is-5">{{model.symmetry}}</p>
			</div>
			<div class="column is-3">
				<label>Fluroscence</label>
				<p class="subtitle is-5">{{model.fluroscence}}</p>
			</div>
			<div class="column is-3">
				<label>certificate</label>
				<p class="subtitle is-5">{{model.certificate}}</p>
			</div>
			<div class="column is-1">
				<label>Lab</label>
				<p class="subtitle is-5">{{model.lab}}</p>
			</div>
			<div class="column is-1">
				<label>Shape</label>
				<p class="subtitle is-5">{{model.shape}}</p>
			</div>	
			<div class="column is-2">
				<label>created_at</label>
				<p class="subtitle is-5">{{model.created_at}}</p>
			</div>
		</div>

		<div class="columns is-centered">
			<div class="column is-4">
				
			</div>
			<div class="column is-4">
				
			</div>
			
		</div>
		
	</div>
</template>

<script>
	import Vue from 'vue'
	import {get, del} from '../../../helpers/api'
	
	export default {
		name: 'CategoryShow',
		data(){
			return {
				model: [],
				resource: 'invDiamonds',
				redirect: '/adm'
			}
		},
		beforeMount(){
			this.fetchData()
		},
		watch: {
			'$route' : 'fetchData'
		},
		methods: {
			fetchData(){

				get(`/api/${this.resource}/${this.$route.params.id}`)
				.then((response)=>{
					Vue.set(this.$data, 'model', response.data.model)
				})
				.catch(function(error){
					console.log(error)
				})
			}
			
		}
	}
</script>