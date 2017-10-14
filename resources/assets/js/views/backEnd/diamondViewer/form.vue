<template>
	<div class="box">
		<form @submit.prevent="save">

		<div class="columns">
			<p class="title is-5 is-primary">Title for post</p>
		</div>

		<div class="columns" >
				<div class="column is-4" >
						<div class="box">
							<label >{{}}</label>
							<input type="file" accept="files/*" class="input" name="csv" @change="upload">
							<small v-if="error.name">{{error.name[0]}}</small>
						</div>

					</div>
				

		</div>

		<div class="columns is-centered">
				<div class="column">
					<button class="button is-primary" @submit="save" :disbled="isProcessing">Save</button>
				</div>
			</div>

		</form>
		

	</div>
</template>

<script type="text/javascript">
	import Vue from 'vue'
	import Flash from '../../../helpers/flash'
	import { get, post } from '../../../helpers/api'
	import {toMulipartedForm} from '../../../helpers/form'
	import ImageUpload from '../../../components/ImageUpload.vue'

	export default {
		components: {
			ImageUpload
		},
		data(){
			return{
				select:[
				{title:''}
				],
				form: {
					invoice_id:'',
					
					images: ['',''],
					csv: ''
				},
				error: {},
				isProcessing: false,
				initializeURL: `/api/diamonds/create`,
				storeURL: `/api/diamonds`,
				action: 'Create'
			}
		},
		created(){
			if (this.$route.meta.mode === 'create') {
				this.form.invoice_id = this.$route.params.id
			}
			if (this.$route.meta.mode === 'edit') {
				this.initializeURL = `/api/diamonds/${this.$route.params.id}/edit`
				this.storeURL = `/api/diamonds/${this.$route.params.id}?_method=PUT`
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
							this.$router.push(`/en/gia-loose-diamonds`)
						}
					})
					.catch((err)=>{
						if (err.response.status === 422) {
							this.error = err.response.data
						}
					this.isProcessing = false
					})
			},
			upload(e){
				const file = e.target.files
				if (file && file.length > 0) {
					this.form.csv = file
				}
			}
			
			
		}
	}
</script>