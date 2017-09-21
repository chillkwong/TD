<template>
	<div class="container">	
	<h1 class="title is-3">{{title}}</h1>
		<form @submit.prevent="save">
		<div class="field" >
			<div class="columns">


				<div class="column is-2">
					<div class="control has-icon-left">
						<div class="control">
							<label  class="label">Stock</label>
								<input type="text" class="input" v-model="form.stock" placeholder="stock" required>
								<small class="is-danger" v-if="errors.stock">{{errors.stock[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-2">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Unit Price</label>
								<input type="text" class="input" v-model="form.unit_price" placeholder="unit_price" required>
								<small class="is-danger" v-if="errors.unit_price">{{errors.unit_price[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-3">
					<div class="control ">
						<div class="control">
							<label class="label">name</label>
								<input type="text" class="input" v-model="form.name" required>
								<small class="is-danger" v-if="errors.name">{{errors.name[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-5">
					<div class="control ">
						<div class="control">
							<label class="label">description</label>
								<input type="description" class="input" v-model="form.description" required>
								<small class="is-danger" v-if="errors.description">{{errors.description[0]}}</small>
						</div>
					</div>
				</div>

			</div>

			<div class="columns">
				
			</div>
			
			<div class="columns is-centered">
					<div class="column">
						<button class="button is-primary" @submit="save">Save</button>
					</div>
				</div>
		
	</div>
	</form>
</div>
</template>

<script type="text/javascript">
	
	import Vue from 'vue'
	import {get, post, put} from '../../helpers/api'

	export default {
		name: 'Invoice Diamonds',
		data(){
			return {
				form: {},
				errors: {},
				option: {},
				title: 'Create',
				initialize: '/api/jewellries/create',
				redirect: '/adm',
				store: '/api/jewellries',
				method: 'post',
			}
		},
		beforeMount(){
			if (this.$route.meta.mode === 'edit') {
				this.title = 'Edit'
				this.initialize = '/api/jewellries/' + this.$route.params.id + '/edit'
				this.store = '/api/jewellries/' + this.$route.params.id
				this.method = 'put'
			}
			this.fetchData()
		},
		watch: {
			'$route' : 'fetchData'
		},
		methods: {
			fetchData(){
				get(this.initialize)
					.then((response)=>{
						Vue.set(this.$data, 'form', response.data.form)
						Vue.set(this.$data, 'option', response.data.option)
					})
					.catch(function(error){
						console.log(error)
					})
			},
			save(){
				if (this.method ==='post') {
					post(this.store, this.form)
					.then((response)=>{
						if(response.data.saved){
							this.$router.push(this.redirect)
						}
					})
					.catch(function(error){
						Vue.set(this.$data, 'errors', error.response.data)
					})
					}else{
						put(this.store, this.form)
					.then((response)=>{
						if(response.data.saved){
							this.$router.push(this.redirect)
						}
					})
					.catch(function(error){
						Vue.set(this.$data, 'errors', error.response.data)
					})
					}
			}
				
		}
	}
</script>