<template>

<div class="container">	
	<h1 class="title is-3">{{title}}</h1>
		<div class="field" @submit.prevent="save">
			<div class="columns">

				<div class="column is-4">
						<label class="label">Customer</label>
						<div class="control">
							<div class="select">
								<select v-model="form.customer_id">
									<option>Select</option>
									<option v-for="customer in option.customers" :value="customer.id">{{customer.name}}</option>
								</select>
							</div>
							<small class="is-danger" v-if="errors.customer_id">{{errors.customer_id[0]}}</small>
						</div>
				</div>	
				<div class="column is-4">
					<div class="control has-icon-left">
						<div class="control">
							<label class="label">Title</label>
								<input type="text" class="input" v-model="form.title" placeholder="item title">
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

			<table class="table is-fullwidth">
				<thead>
					<tr>
						<th>Description</th>
						<th>Unit Price</th>
						<th>Qty</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="(item,index) in form.items">
						<td><input type="text" v-model="item.description" class="input"></td>
						<td><input type="text" v-model="item.unit_price" class="input"></td>
						<td><input type="text" v-model="item.qty" class="input"></td>
						<td>{{parseFloat(item.qty*parseFloat(item.unit_price))}}</td>
						<td @click="form.items.splice(index,1)"><button class="delete is-small"></button></td>
					</tr>
				</tbody>
				<tfoot>
						<tr>
							<td colspan="2"><button class="button is-info" @click="addLine">Add Line</button></td>
							<td>Sub Total</td>
							<td>{{subTotal}}</td>
						</tr>
						<tr>
							<td colspan="2">
							</td>
							<td>Discount</td>
							<td>
								<input type="text" class="input" v-model="form.discount">
							</td>
						</tr>
						<tr>
							<td colspan="2">
							</td>
							<td><strong>Deposit</strong></td>
							<td>
								<input type="text" class="input" v-model="form.deposit">
							</td>
						</tr>
						<tr>
							<td colspan="2">
							</td>
							<td>Balance</td>
							<td>
								{{balance}}
							</td>
						</tr>
						<tr>
							<td colspan="2"></td>
							<td><strong>Total</strong></td>
							<td>{{total}}</td>
						</tr>
				</tfoot>
			</table>
			<div class="columns is-centered">
				<div class="column is-8"></div>
				<div class="column ">
					<button class="button is-primary" @click="save">Save</button>
				</div>
			</div>
		</div>	
</div>
	
</template>

<script>
	import Vue from 'vue'
	import axios from 'axios'
	export default {
		name: 'InvoiceForm',
		data(){
			return {
				form: {
					items: []
				},
				errors: {},
				option: {
					customers: []
				},
				title: 'Create',
				initialize: '/api/invoices/create',
				redirect: '/invoices',
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
			'$route' : 'fetchData'
		},
		computed: {
			subTotal(){
				return this.form.items.reduce(function(carry, item){
					return carry + parseFloat(item.qty) * parseFloat(item.unit_price)
				}, 0)
			},
			total(){
				return this.subTotal - parseFloat(this.form.discount)
			},
			balance(){
				return this.total - this.form.deposit
			}
		},
		methods: {
			addLine(){
				this.form.items.push({
					description: '',
					unit_price: 0,
					qty: 1
				})
			},
			fetchData(){
				var vm = this
				axios.get(this.initialize)
					.then(function(response){
						Vue.set(vm.$data, 'form', response.data.form)
						Vue.set(vm.$data, 'option', response.data.option)
					})
					.catch(function(error){
						console.log(error)
					})
			},
			save(){
				var vm = this
				axios[this.method](this.store, this.form)
					.then(function(response){
						if(response.data.saved){
							vm.$router.push(vm.redirect)
						}
					})
					.catch(function(error){
						Vue.set(vm.$data, 'errors', error.response.data)
					})
			}
		}
	}
</script>