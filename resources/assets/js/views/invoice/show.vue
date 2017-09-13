<template>
	<div class="container">
	<div v-if="fullpath" class="columns">
		<div class="column">
			<router-link :to="'/invoices/pdf/' + model.id" class="button is-primary">PDF</router-link>
		</div>
	</div>
		<div class="columns">
			<div class="column">
				
			      <img :src="images.company.logo" alt="Bulma: a modern CSS framework based on Flexbox" width="60" height="200">
			   
			</div>
			<div class="column is-4">
				<h1 class="title is-1">Invoice</h1>			
				<h1 class="title is-4">{{company.info.name}}</h1>			
				<h1 class="subtitle is-6">{{company.info.address}}</h1>
				<h1 class="subtitle is-6">{{company.info.contact}}</h1>
				<a href="/">{{company.info.website}}</a>
			</div>
		</div>
		<hr>
		<div class="columns">
			<div class="column">
				<p class="subtitle is-5">BILL TO</p>
				<p class="title is-5">{{model.customer.name}}</p>
				<p class="title is-6">Phone: {{model.customer.phone}}</p>
			</div>
			<div class="column is-2">
				<p ><strong>Invoice Number: </strong></p>			
				<p ><strong> Invoice Date: </strong></p>			
				<p ><strong> Payment Due: </strong></p>
				<p ><strong> Amount Due (HKD): </strong></p>
			</div>
			<div class="column is-2">
				<p >{{model.id}}</p>			
				<p >{{model.date}}</p>			
				<p >{{model.due_date}}</p>
				<p >${{model.total}}</p>
			</div>
		</div>
		<table class="table is-fullwidth">
				<thead>
					<tr>
						<th>Items</th>
						<th>Desciption</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="item in model.items">
						<td>{{item.name}}</td>
						<td>{{item.description}}</td>
						<td>{{item.qty}}</td>
						<td>{{item.unit_price}}</td>
						<td>${{item.unit_price * item.qty}}</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><p class="subtitle is-6"><strong>Deposit:</strong></p></td>
						<td>${{model.deposit}}</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><p class="subtitle is-6"><strong>Balance:</strong></p></td>
						<td>${{model.balance}}</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><strong>Total:</strong></td>
						<td>${{model.total}}</td>
					</tr>
				</tbody>
			</table>
			<hr>
			<div class="columns">
				<div class="column">
					
				</div>
			</div>
	</div>
</template>

<script>

	import Vue from 'vue'
	import axios from 'axios'
	import Images from '../../helpers/images'

	export default {
		name: 'invoiceShow',
		data(){
			return {
				model: {
					customer: {},
					items: []
				},
				company: [],
				images: Images,
				resource: 'invoices',
				redirect: '/invoices'
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
				var vm = this
				axios.get(`/api/${this.resource}/${this.$route.params.id}`)
				.then(function(response){
					Vue.set(vm.$data, 'model', response.data.model)
					Vue.set(vm.$data, 'company', response.data.company)
				})
				.catch(function(error){
					console.log(error)
				})
			},
			remove(){
				var vm = this
				axios.delete(`/api/${this.resource}/${this.$route.params.id}`)
					.then(function(response){
						if (response.data.deleted) {
							vm.$router.push(vm.redirect)
						}
					})
					.catch(function(error){
						console.log(error)
					})
						
			}
		}
	}
</script>