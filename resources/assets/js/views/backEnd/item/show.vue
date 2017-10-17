<template>
	<div class="container">
	<nav class="level">
		
	</nav>
	<div v-if="fullpath">
	<div class="columns">
		<div class="column is-left">
			<router-link :to="'/items/pdf/' + model.id" class="button is-primary">Print</router-link>
		</div>
		<div class="column is-right">
			
			<router-link :to="'/adm/items/create'" class="button is-primary">Create</router-link>
			<router-link :to="'/adm/items/' + model.id + '/edit'" class="button is-primary">Edit</router-link>
			<button class="button is-primary" @click="remove">Delete</button>
			</div>
		</div>

	</div>
	<div class="box">
		<div class="columns is-centered">
			<div class="column is-4">
				<label>Item</label>
				<p class="subtitle is-5">{{model.id}}</p>
			</div>
			<div class="column is-4">
				<label>Quantity</label>
				<p class="subtitle is-5">{{model.qty}}</p>
			</div>
			<div class="column is-4">
				<label>Price</label>
				<p class="subtitle is-5">{{model.unit_price}}</p>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-4">
				<label>Name</label>
				<p class="subtitle is-5">{{model.name}}</p>
			</div>
			<div class="column is-4">
				<label>Description</label>
				<p class="subtitle is-5">{{model.description}}</p>
			</div>
			<div class="column is-4">
				<label>Create At</label>
				<p class="subtitle is-5">{{model.created_at}}</p>
			</div>
		</div>
		
		<hr>

		 <div class="columns is-centered ">
					<div class="column is-6">
						<label>Belongs To Invoice:</label>
						<button class="button is-medium"><router-link  :to="'/adm/invoices/' + model.invoice_id ">{{model.invoice_id}}</router-link></button>
						<!-- <p class="subtitle is-4"></p> -->
					</div>
					<div class="column is-6">
						<label>Belongs To Supplier:</label>
						<p class="subtitle is-4">{{model.supplier_id}}</p>
					</div>
				</div>
				<typehead :options="options" v-model="selected"></typehead>
		<div class="tile is-ancestor">
		  <div class="tile is-vertical">
		    <div class="tile">
		      <div class="tile is-parent is-vertical">
		        <article class="tile is-child notification is-primary">

		        </article>
		      </div>
	      	</div>
	      </div>
      	</div>

      	<hr>
		
		<hr>
		</div>
	</div>
</template>

<script>

	import Vue from 'vue'
	import {get, del} from '../../../helpers/api'
	// import Typehead from '../../components/typehead.vue'

	export default {
		name: 'itemshow',
		// components:{Typehead},
		data(){
			return {
				model: {
					invoice: {},
					diamond: {},
					jewellry: {},
					// selected: null,
					//  options: [
					//           {id:1, text: 'apple'},
					//           {id:2, text: 'orange'},
					//           {id:3, text: 'cherry'},
					//           {id:4, text: 'mango'}
					//         ]
				},
				resource: 'items',
				redirect: '/adm/items'
			}
		},
		beforeMount(){
			this.fetchData()
		},
		watch: {
			'$route' : 'fetchData'
		},
		computed:{
				fullpath(){
					return !this.$route.fullPath.includes('pdf')
					
				}
		},
		methods: {
			fetchData(){

				get(`/api/${this.resource}/${this.$route.params.id}`)
				.then((res)=>{
					Vue.set(this.$data, 'model', res.data.model)
				})
				.catch(function(error){
					console.log(error)
				})
			},
			remove(){

				del(`/api/${this.resource}/${this.$route.params.id}`)
					.then((res)=>{
						if (res.data.deleted) {
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