<template>
	<div class="container">
		<nav class="level">
		
		</nav>
		<div class="columns is-centered">
			<div class="column is-9">
				<p class="title is-2">{{model.name}}</p>
			</div>
			<div class="column is-3">
				<router-link :to="'/adm/jewellries/' + model.id + '/edit'" class="button is-primary">Edit </router-link>
				<button class="button is-primary" @click="remove">Delete</button>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-2">
				<label>Stock</label>
				<p class="subtitle is-5">{{model.stock}}</p>
			</div>
			<div class="column is-2">
				<label>Unit Price</label>
				<p class="subtitle is-5">{{model.unit_price}}</p>
			</div>
			<div class="column is-3">
				<label>Name</label>
				<p class="subtitle is-5">{{model.name}}</p>
			</div>
			<div class="column is-5">
				<label>Description</label>
				<p class="subtitle is-5">{{model.description}}</p>
			</div>
			
		</div>

		<div class="columns is-centered">
			<div class="column is-4">
				
			</div>
			<div class="column is-4">
				
			</div>
			<div class="column is-4">
				<label>created_at</label>
				<p class="subtitle is-5">{{model.created_at}}</p>
			</div>
		</div>
		
	</div>
</template>

<script>
	import Vue from 'vue'
	import {get, del} from '../../helpers/api'
	
	export default {
		name: 'CategoryShow',
		data(){
			return {
				model: [],
				resource: 'jewellries',
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
			},
			remove(){

				del(`/api/${this.resource}/${this.$route.params.id}`)
					.then((response)=>{
						if (response.data.deleted) {
							this.$router.push(this.redirect)
						}
					})
					.catch(function(error){
						console.log(error)
					})
						
			}
		}
	}
</script>