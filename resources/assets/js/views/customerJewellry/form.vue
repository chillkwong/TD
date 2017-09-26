<template>
	<div class="box">
		<div class="columns">
			<div class="column">
				<h3>{{action}} Post</h3>
				<div>
					<button class="button is-primary" @click="save" :disbled="isProcessing">
						Save
					</button>
					<button @click="$router.back()" class="button is-primary" :disabled="isProcessing">
						Cancel
					</button>
				</div>
			</div>
		</div>

		<div class="columns">
			<div class="column">
				<select v-model="form.invoice_id">
					<option v-for="selt in select">{{selt.id}}</option>
				</select>
			</div>
		</div>

		<div class="columns" >
			<div class="column is-4">
					<div class="box">
						<label> Cover</label>
						<image-upload  v-model="form.cover" ></image-upload>
						<small class="error__control" v-if="error.image">{{error.image[0]}}</small>
					</div>
			</div>
			<div class="column is-4">
					<div class="box">
						<label>GIA cert</label>
						<image-upload  v-model="form.image1" ></image-upload>
						<small class="error__control" v-if="error.image">{{error.image[0]}}</small>
					</div>
			</div>
			<div class="column is-4">
					<div class="box">
						<label> Diamond Girdle</label>
						<image-upload  v-model="form.image2" ></image-upload>
						<small class="error__control" v-if="error.image">{{error.image[2]}}</small>
					</div>
			</div>
		</div>						
			
		<div class="columns">
			<p class="title is-5 is-primary">Title for post</p>
		</div>
		<div class="columns" >
				<div class="column is-4" v-for="content in form.contents" >
						<div class="box">
							<label >{{content.locale}}</label>
							<input type="text" class="input" v-model="content.content">
							<small v-if="error.name">{{error.name[0]}}</small>
						</div>

					</div>
				

		</div>

		<!-- <div class="columns">
			<p class="title is-5 is-primary">Title for post</p>
		</div>
		<div class="columns" v-for="content in form.contents" >
				<div class="column is-4" >
						<div class="box">
							<label >{{content.locale[0]}}</label>
							<input type="text" class="input" v-model="content.content[0]">
							<small v-if="error.name">{{error.name[0]}}</small>
						</div>

					</div>
				<div class="column is-4" >
						<div class="box">
							<label >{{content.locale[1]}}</label>
							<input type="text" class="input" v-model="content.content[1]">
							<small v-if="error.name">{{error.name[0]}}</small>
						</div>

					</div>
				<div class="column is-4" >
						<div class="box">
							<label >{{content.locale[2]}}</label>
							<input type="text" class="input" v-model="content.content[2]">
							<small v-if="error.name">{{error.name[0]}}</small>
						</div>

					</div>

		</div> -->

		<div class="columns">
			<p class="title is-5 is-primary">Video for post</p>
		</div>
		<div class="columns">
				<div class="column is-4" >
						<div class="box">
							<label >Video</label>
							<input type="text" class="input" v-model="form.video">
							<small v-if="error.name">{{error.name[0]}}</small>
						</div>

					</div>

		</div>

	</div>
</template>

<script type="text/javascript">
	import Vue from 'vue'
	import Flash from '../../helpers/flash'
	import { get, post } from '../../helpers/api'
	import {toMulipartedForm} from '../../helpers/form'
	import ImageUpload from '../../components/ImageUpload.vue'

	export default {
		components: {
			ImageUpload
		},
		data(){
			return{
				select:[],
				form: {
					invoice_id:'',
					
					images: ['','']
				},
				error: {},
				isProcessing: false,
				initializeURL: `/api/invPosts/create`,
				storeURL: `/api/invPosts`,
				action: 'Create'
			}
		},
		created(){
			if (this.$route.meta.mode === 'edit') {
				this.initializeURL = `/api/invPosts/${this.$route.params.id}/edit`
				this.storeURL = `/api/invPosts/${this.$route.params.id}?_method=PUT`
				this.action = 'Update'
			}
			get(this.initializeURL)
				.then((res)=>{
				Vue.set(this.$data, 'form', res.data.form)
				Vue.set(this.$data, 'select', res.data.select)
			})
		},
		methods: {
			save(){
				this.isProcessing = true
				const form = toMulipartedForm(this.form, this.$route.meta.mode)
				post(this.storeURL, form)
					.then((res)=>{
						if (res.data.saved) {
							Flash.setSuccess(res.data.message)
							this.$router.push(`/adm/customer-jewellries/${res.data.id}`)
						}
					})
					.catch((err)=>{
						if (err.response.status === 422) {
							this.error = err.response.data
						}
					this.isProcessing = false
					})
			},
			addDirection(){
				this.form.directions.push({description: ''})
			},
			addIngredient(){
				this.form.ingredients.push({
					name: '',
					qty: ''
				})
			},
			remove(type, index){
				if (this.form[type].length > 1) {
					this.form[type].splice(index,1)
				}
			}
		}
	}
</script>