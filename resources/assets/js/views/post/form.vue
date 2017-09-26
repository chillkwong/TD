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
				<div class="box">
					<div class="" v-for="image in form.images">
					<image-upload v-model="form.images[form.images.length]"></image-upload>
					<small class="error__control" v-if="error.image">{{error.image[0]}}</small>
					</div>
				</div>
				<div class="box"  >
					<div class="columns">
						<div class="column is-5" >
							<label>title</label>
							<input type="text" class="input" v-model="form.contents[0].content">
							<small class="error__control" v-if="error.name">{{error.name[0]}}</small>
						</div>
						<div class="column is-7">
							<label>description</label>
							<textarea class="textarea" v-model="form.contents[0].locale"> </textarea> 
							<small class="error__control" v-if="error.description">{{error.description[0]}}</small>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="post__row">
				<div class="post__ingredients">
					<div class="post__box">
						<h3 class="post__sub_title">Ingredients</h3>
						<div v-for="(ingredient, index) in form.ingredients" class="post__form">
							<input type="text" v-model="ingredient.name" class="form__control" 
							:class="[error[`ingredients.${index}.name`]?'error__bg':' ']">
							<input type="text" v-model="ingredient.qty" class="form__qty" 
							:class="[error[`ingredients.${index}.qty`]?'error__bg':' ']">
							<button class="btn btn__danger" @click="remove('ingredients', index)">&times;</button>
						</div>
						<button class="btn" @click="addIngredient">Add Ingredient</button>
					</div>
				</div>
				<div class="post__directions">
					<div class="post__directions_inner">
						<h3 class="post__sub_title">Directions</h3>
						<div v-for="(direction, index) in form.directions" class="post__form">
							<textarea v-model="direction.description" class="form__control" 
							:class="[error[`directions.${index}.description`]?'error__bg':' ']"></textarea>
							<button class="btn btn__danger" @click="remove('directions', index)">&times;</button>
						</div>
						<button class="btn" @click="addDirection">Add direction</button>
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
				form: {
					images:''
				},
				error: {},
				isProcessing: false,
				initializeURL: `/api/posts/create`,
				storeURL: `/api/posts`,
				action: 'Create'
			}
		},
		created(){
			if (this.$route.meta.mode === 'edit') {
				this.initializeURL = `/api/posts/${this.$route.params.id}/edit`
				this.storeURL = `/api/posts/${this.$route.params.id}?_method=PUT`
				this.action = 'Update'
			}
			get(this.initializeURL)
				.then((res)=>{
				Vue.set(this.$data, 'form', res.data.form)
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
							this.$router.push(`/posts/${res.data.id}`)
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