<template>

<div class="container">	
	<h1 class="title is-3">{{title}}</h1>
	<form @submit.prevent="save">
		<div class="field" >
			<div class="columns">

				<div class="column is-4">
						<label class="label">Customer</label>
						<div class="control">
							<typehead :options="option.customers" v-model="form.customer_id"></typehead>
							
							<small class="is-danger" v-if="errors.customer_id">{{errors.customer_id[0]}}</small>
						</div>
				</div>	
				<div class="column is-4">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Title</label>
								<input type="text" class="input" v-model="form.title" placeholder="item name" required>
								<small class="is-danger" v-if="errors.title">{{errors.title[0]}}</small>
						</div>
					</div>
				</div>
				<div class="column is-4">
					<div class="control ">
						<div class="control">
							<label class="label">Date</label>
								<input type="date" class="input" v-model="form.date">
								<small class="is-danger" v-if="errors.date">{{errors.date[0]}}</small>
						</div>
					</div>
					<div class="control ">
						<div class="control">
							<label class="label">Due Date</label>
								<input type="date" class="input" v-model="form.due_date">
								<small class="is-danger" v-if="errors.due_date">{{errors.due_date[0]}}</small>
						</div>
					</div>
			</div>
			

		</div>

		<hr>
		<button class="button" @click="addDiamond">Add Diamond</button>
		<div class="box" v-for="(diamond,index) in form.inv_diamonds" >
			<a class="delete is-medium" @click="form.inv_diamonds.splice(index,1)"></a>
		<div class="columns">
				<div class="column is-4">
						<div class="control">
							<label class="label">Price</label>
								<input type="text" class="input" v-model="diamond.price" placeholder="price" required>
								<small class="is-danger" v-if="errors.price">{{errors.price[0]}}</small>
						</div>
				</div>	
				<div class="column is-2">
						<div class="control">
							<label class="label">Weight</label>
								<input type="text" class="input" v-model="diamond.weight" placeholder="weight" required>
								<small class="is-danger" v-if="errors.weight">{{errors.weight[0]}}</small>
						</div>
				</div>	
				<div class="column is-2">
						<div class="control">
							<label class="label">Color</label>
								<input type="text" class="input" v-model="diamond.color" placeholder="color" required>
								<small class="is-danger" v-if="errors.color">{{errors.color[0]}}</small>
						</div>
				</div>	
				<div class="column is-2">
						<div class="control">
							<label class="label">Clarity</label>
								<input type="text" class="input" v-model="diamond.clarity" placeholder="clarity" required>
								<small class="is-danger" v-if="errors.clarity">{{errors.clarity[0]}}</small>
						</div>
				</div>
				<div class="column is-2">
						<div class="control">
							<label class="label">Fluroscence</label>
								<input type="text" class="input" v-model="diamond.fluroscence" placeholder="fluroscence" required>
								<small class="is-danger" v-if="errors.fluroscence">{{errors.fluroscence[0]}}</small>
						</div>
				</div>	
					

		</div>
		<div class="columns" >
				<div class="column is-4">
						<div class="control">
							<label class="label">Certificate</label>
								<input type="text" class="input" v-model="diamond.certificate" placeholder="certificate" required>
								<small class="is-danger" v-if="errors.certificate">{{errors.certificate[0]}}</small>
						</div>
				</div>	
				<div class="column is-2">
						<div class="control">
							<label class="label">stock</label>
								<input type="text" class="input" v-model="diamond.stock" placeholder="stock" required>
								<small class="is-danger" v-if="errors.stock">{{errors.stock[0]}}</small>
						</div>
				</div>
				<div class="column is-1">
						<div class="control">
							<label class="label">cut</label>
								<input type="text" class="input" v-model="diamond.cut" placeholder="cut" required>
								<small class="is-danger" v-if="errors.cut">{{errors.cut[0]}}</small>
						</div>
				</div>	
				<div class="column is-1">
						<div class="control">
							<label class="label">Polish</label>
								<input type="text" class="input" v-model="diamond.polish" placeholder="polish" required>
								<small class="is-danger" v-if="errors.polish">{{errors.polish[0]}}</small>
						</div>
				</div>	
				<div class="column is-2">
						<div class="control">
							<label class="label">Symmetry</label>
								<input type="text" class="input" v-model="diamond.symmetry" placeholder="symmetry" required>
								<small class="is-danger" v-if="errors.symmetry">{{errors.symmetry[0]}}</small>
						</div>
				</div>	
				<div class="column is-1">
						<div class="control">
							<label class="label">shape</label>
								<input type="text" class="input" v-model="diamond.shape" placeholder="shape" required>
								<small class="is-danger" v-if="errors.shape">{{errors.shape[0]}}</small>
						</div>
				</div>
				<div class="column is-1">
						<div class="control">
							<label class="label">lab</label>
								<input type="text" class="input" v-model="diamond.lab" placeholder="lab" required>
								<small class="is-danger" v-if="errors.lab">{{errors.lab[0]}}</small>
						</div>
				</div>
				
					

			</div>

		</div>

		<div class="box" >
			<div class="columns">
				<div class="column is-4">
						<typehead :options = "option.jewellries" v-model="selectedJew" ></typehead>
				</div>
				
			</div>
		</div>

		<div class="box" v-for="(jewellry,index) in form.jewellries">
			<div class="columns">
				<a class="delete" @click="form.jewellries.splice(index,1)"></a>
				<div class="column is-1">
					<label>ID</label>
					<p class="subtitle is-5">{{option.jewellries[jewellry.id-1].id}}</p>
				</div>
				<div class="column is-2">
					<label>Unit Price</label>
					<p class="subtitle is-5">{{option.jewellries[jewellry.id-1].unit_price}}</p>
				</div>
				<div class="column is-3">
					<label>Name</label>
					<p class="subtitle is-5">{{option.jewellries[jewellry.id-1].text}}</p>
				</div>
				<div class="column is-6">
					<label>Description</label>
					<p class="subtitle is-5">{{option.jewellries[jewellry.id-1].description}}</p>
				</div>
			</div>
		</div>

			<table class="table is-fullwidth">
				
				<tfoot>
						<tr>
							<td colspan="4"></td>
							<td>Sub Total</td>
							<td>{{subTotal}}</td>
						</tr>
						<tr>
							<td colspan="4">
							</td>
							<td>Discount</td>
							<td>
								<input type="text" class="input" v-model="form.discount">
							</td>
						</tr>
						<tr>
							<td colspan="4">
							</td>
							<td><strong>Deposit</strong></td>
							<td>
								<input type="text" class="input" v-model="form.deposit">
							</td>
						</tr>
						<tr>
							<td colspan="4">
							</td>
							<td>Balance</td>
							<td>
								{{balance}}
							</td>
						</tr>
						<tr>
							<td colspan="4"></td>
							<td><strong>Total</strong></td>
							<td>{{total}}</td>
						</tr>
						<tr>
							<td colspan="4"></td>
							<td><strong>notes</strong></td>
							<td><textarea class="textarea">{{form.notes}}</textarea></td>
						</tr>
				</tfoot>
			</table>

			<div class="columns is-centered">
				<div class="column is-8">
					<button class="button" @click="form.count=!form.count">Count: {{form.count}}</button>
				</div>

							
				
				<div class="column ">
					<button class="button is-primary" type="submit" @submit.stop="save">Save</button>
				</div>
			</div>
		</div>
	</form>	
</div>
	
</template>

<script>
	import Vue from 'vue'
	import {get, post, put} from '../../helpers/api'
	import Typehead from '../../components/typehead.vue'

	export default {
		name: 'InvoiceForm',
		components:{Typehead},
		data(){
			return {
				form: {
					ind_diamonds:[],
					jewellries:[{id:''}],
					sub_total: 0
				},
				selectedJew:[],
				errors: {},
				option: {
					customers: []
				},
				title: 'Create',
				initialize: '/api/invoices/create',
				redirect: '/adm/invoices',
				store: '/api/invoices',
				method: 'post',
			}
		},
		beforeMount(){
			if (this.$route.meta.mode === 'edit') {
				this.title = 'Edit'
				this.initialize = '/api/invoices/' + this.$route.params.id + '/edit'
				this.store = '/api/invoices/' + this.$route.params.id
				this.method = 'put'
			}
			this.fetchData()
		},
		watch: {
			'$route' : 'fetchData',
			'selectedJew': 'addSelectedJew' 
		},
		computed: {
			subTotal(){
				
			var price = 0
			for (var i = this.form.jewellries.length - 1; i >= 0; i--) {
				price += this.option.jewellries[this.form.jewellries.length].unit_price
			}

			price += this.form.inv_diamonds.reduce((carry, item)=>{
				return carry += parseFloat(item.price)
			},0)

			return this.form.sub_total = price
			},
			total(){
				return this.form.total = this.form.sub_total - this.form.discount
			},
			balance(){
				return this.form.balance = this.total - this.form.deposit
			}
		
		},
		methods: {
			addSelectedJew(){
				this.form.jewellries.push({id:this.selectedJew})
			},
			addDiamond(){
				this.form.inv_diamonds.push({
					certificate: '',
					clarity: '',
					color:'',
					cut:'EX',
					fluroscence:'NON',
					lab:'GIA',
					polish:'EX',
					shape:'RD',
					stock:'',
					symmetry:'EX',
					price:0,
					weight:''
				})
			},
			fetchData(){
				get(this.initialize)
					.then((res)=>{
						Vue.set(this.$data, 'form', res.data.form)
						Vue.set(this.$data, 'option', res.data.option)
					})
					.catch(function(error){
						console.log(error)
					})
			},
			save(){
				if (this.method === 'put') {
					put(this.store, this.form)
						.then((res)=>{
						if(res.data.saved){
							this.$router.push(this.redirect)
						}
					})
					.catch(function(error){
						Vue.set(this.$data, 'errors', error.res.data)
					})

				}else{post(this.store, this.form)
					.then((res)=>{
						if(res.data.saved){
							this.$router.push(this.redirect)
						}
					})
					.catch(function(error){
						Vue.set(this.$data, 'errors', error.res.data)
					})}
			}
		}
	}
</script>