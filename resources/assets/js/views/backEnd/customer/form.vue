<template>
	<div class="container">	
	<h1 class="title is-3">{{title}}</h1>
		<div class="field" @submit.prevent="save">
			<div class="columns">

				<div class="column is-4">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Name</label>
								<input type="text" class="input" v-model="form.name" placeholder="name">
								<small class="is-danger" v-if="errors.name">{{errors.name[0]}}</small>
						</div>
					</div>	
				</div>	

				<div class="column is-4">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">phone</label>
								<input type="text" class="input" v-model="form.phone" placeholder="Phone">
								<small class="is-danger" v-if="errors.phone">{{errors.phone[0]}}</small>
						</div>
					</div>
				</div>

				<div class="column is-4">
					<div class="control ">
						<div class="control">
							<label class="label">email</label>
								<input type="email" class="input" v-model="form.email">
								<small class="is-danger" v-if="errors.email">{{errors.email[0]}}</small>
						</div>
					</div>
				</div>
			</div>
			<div class="columns is-centered">
					<div class="column">
						<button class="button is-primary" @click="save">Save</button>
					</div>
				</div>
		
	</div>
</div>
</template>

<script type="text/javascript">
	
	import Vue from 'vue'
	import {get, post, put} from '../../../helpers/api'

	export default {
		name: 'CustomerForm',
		data(){
			return {
				form: {},
				errors: {},
				option: {},
				title: 'Create',
				initialize: '/api/customers/create',
				redirect: '/adm',
				store: '/api/customers',
				method: 'post',
			}
		},
		beforeMount(){
			if (this.$route.meta.mode === 'edit') {
				this.title = 'Edit'
				this.initialize = '/api/customers/' + this.$route.params.id + '/edit'
				this.store = '/api/customers/' + this.$route.params.id
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