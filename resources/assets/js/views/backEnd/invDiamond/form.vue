<template>
	<div class="container">	
	<h1 class="title is-3">{{title}}</h1>
		<form @submit.prevent="save">
		<div class="field" >
			<div class="columns">

				<div class="column is-3">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Price</label>
								<input type="text" class="input" v-model="form.price" placeholder="price" required>
								<small class="is-danger" v-if="errors.price">{{errors.price[0]}}</small>
						</div>
					</div>	
				</div>	

				<div class="column is-1">
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
							<label class="label">Clarity</label>
								<input type="text" class="input" v-model="form.clarity" placeholder="clarity" required>
								<small class="is-danger" v-if="errors.clarity">{{errors.clarity[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-3">
					<div class="control ">
						<div class="control">
							<label class="label">Weight</label>
								<input type="weight" class="input" v-model="form.weight" required>
								<small class="is-danger" v-if="errors.weight">{{errors.weight[0]}}</small>
						</div>
					</div>
				</div>

				<div class="column is-3">
					<div class="control ">
						<div class="control">
							<label class="label">Color</label>
								<input type="text" class="input" v-model="form.color" required>
								<small class="is-danger" v-if="errors.color">{{errors.color[0]}}</small>
						</div>
					</div>
				</div>

			</div>

			<div class="columns">

				<div class="column is-1">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Cut</label>
								<input type="text" class="input" v-model="form.cut" placeholder="cut" required>
								<small class="is-danger" v-if="errors.cut">{{errors.cut[0]}}</small>
						</div>
					</div>	
				</div>	

				<div class="column is-1">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Polish</label>
								<input type="text" class="input" v-model="form.polish" placeholder="polish" required>
								<small class="is-danger" v-if="errors.polish">{{errors.polish[0]}}</small>
						</div>
					</div>
				</div>

				<div class="column is-1">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Symmetry</label>
								<input type="text" class="input" v-model="form.symmetry" placeholder="symmetry" required>
								<small class="is-danger" v-if="errors.symmetry">{{errors.symmetry[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-3">
					<div class="control ">
						<div class="control">
							<label class="label">Fluorescence</label>
								<input type="fluorescence" class="input" v-model="form.fluorescence" required>
								<small class="is-danger" v-if="errors.fluorescence">{{errors.fluorescence[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-3">
					<div class="control ">
						<div class="control">
							<label class="label">certificate</label>
								<input type="text" class="input" v-model="form.certificate" required>
								<small class="is-danger" v-if="errors.certificate">{{errors.certificate[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-1">
					<div class="control ">
						<div class="control">
							<label class="label">Lab</label>
								<input type="text" class="input" v-model="form.lab" required>
								<small class="is-danger" v-if="errors.lab">{{errors.lab[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-2">
					<div class="control ">
						<div class="control">
							<label class="label">shape</label>
								<input type="shape" class="input" v-model="form.shape" required>
								<small class="is-danger" v-if="errors.shape">{{errors.shape[0]}}</small>
						</div>
					</div>
				</div>
				
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
	import {get, post, put} from '../../../helpers/api'

	export default {
		name: 'Invoice Diamonds',
		data(){
			return {
				form: {},
				errors: {},
				option: {},
				title: 'Create',
				initialize: '/api/invDiamonds/create',
				redirect: '/adm',
				store: '/api/invDiamonds',
				method: 'post',
			}
		},
		beforeMount(){
			if (this.$route.meta.mode === 'edit') {
				this.title = 'Edit'
				this.initialize = '/api/invDiamonds/' + this.$route.params.id + '/edit'
				this.store = '/api/invDiamonds/' + this.$route.params.id
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