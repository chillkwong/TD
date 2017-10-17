<template>
	<div class="container">
		<nav class="level">
		
		</nav>
		<div class="columns is-centered">
			<div class="column is-9">
				<p class="title is-2">{{model.name}}</p>
			</div>
			<div class="column is-3">
				<router-link :to="'/adm/customers/' + model.id + '/edit'" class="button is-primary">Edit </router-link>
				<button class="button is-primary" @click="remove">Delete</button>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-4">
				<label>Name</label>
				<p class="subtitle is-5">{{model.name}}</p>
			</div>
			<div class="column is-4">
				<label>Email</label>
				<p class="subtitle is-5">{{model.email}}</p>
			</div>
			<div class="column is-4">
				<label>phone</label>
				<p class="subtitle is-5">{{model.phone}}</p>
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
	import {get, del} from '../../../helpers/api'
	
	export default {
		name: 'CategoryShow',
		data(){
			return {
				model: [],
				resource: 'customers',
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