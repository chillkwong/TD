<template>
	<div class="container">	
	<h1 class="title is-3">{{title}}</h1>
	<h1 class="title is-3">Latest ID:{{option.id}}</h1>
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
								<input type="text" class="input" v-model="form.name" placeholder="name" required>
								<small class="is-danger" v-if="errors.name">{{errors.name[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-5">
					<div class="control ">
						<div class="control">
							<label class="label">description</label>
								<input type="description" class="input" v-model="form.description" required placeholder="description">
								<small class="is-danger" v-if="errors.description">{{errors.description[0]}}</small>
						</div>
					</div>
				</div>

			</div>

			<div class="columns">


				<div class="column is-2">
					<div class="control has-icon-left">
						<div class="control">
							<label  class="label">Mounting</label>
								<input type="text" class="input" v-model="form.mounting" placeholder="mounting" required>
								<small class="is-danger" v-if="errors.mounting">{{errors.mounting[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-2">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Shoulder</label>
								<input type="text" class="input" v-model="form.shoulder" placeholder="shoulder" required>
								<small class="is-danger" v-if="errors.shoulder">{{errors.shoulder[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-2">
					<div class="control ">
						<div class="control">
							<label class="label">Side Stone</label>
								<input type="text" class="input" v-model="form.sideStone" required>
								<small class="is-danger" v-if="errors.sideStone">{{errors.sideStone[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-4">
					<div class="control ">
						<div class="control">
							<label class="label">video</label>
								<input type="video" class="input" v-model="form.video" required placeholder="https://www.youtube.com/embed/">
								<small class="is-danger" v-if="errors.video">{{errors.video[0]}}</small>
						</div>
					</div>
				</div>

			</div>

			<div class="columns" >
				<div class="column is-4">
						<div class="box">
							<label> Cover</label>
							<image-upload  v-model="form.cover" ></image-upload>
							<small class="error__control" v-if="errors.cover">{{errors.cover[0]}}</small>
						</div>
				</div>
				<div class="column is-4">
						<div class="box">
							<label>image1</label>
							<image-upload  v-model="form.image1" ></image-upload>
							<small class="error__control" v-if="errors.image1">{{errors.image1[0]}}</small>
						</div>
				</div>
				
			</div>		


			<div class="columns">
				
			</div>
			
			<div class="columns is-centered">
					<div class="column">
						<button class="button is-primary" @submit="save" :disbled="isProcessing">Save</button>
					</div>
				</div>
		
	</div>
	</form>
</div>
</template>

<script type="text/javascript">
	
	import Vue from 'vue'
	import {get, post, put} from '../../helpers/api'
	import {toMulipartedForm} from '../../helpers/form'	
	import ImageUpload from '../../components/ImageUpload.vue'


	export default {
		components: {
			ImageUpload
		},
		data(){
			return {
				form: {
					cover:'',
					image1:'',
					image2:''
				},
				isProcessing: false,
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
				this.storeURL = `/api/jewellries/${this.$route.params.id}?_method=PUT`
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
				
					const form = toMulipartedForm(this.form, this.$route.meta.mode)
					post(this.storeURL, form)
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
</script>