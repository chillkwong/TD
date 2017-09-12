<template>
	<div class="container">
		<div class="columns">
			<div class="column">
				
			      <img :src="images.company.logo" alt="Bulma: a modern CSS framework based on Flexbox" width="60" height="200">
			   
			</div>
			<div class="column">
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
				<p class="title is-6">{{model.customer.phone}}</p>
			</div>
			<div class="column">
				<p ><strong>Invoice Number: </strong>{{model.id}}</p>			
				<p ><strong> Invoice Date: </strong> {{model.date}}</p>			
				<p ><strong> Payment Due: </strong> {{model.due_date}}</p>
				<p ><strong> Amount Due (HKD): </strong> ${{model.total}}</p>
			</div>
		</div>
		<table class="table is-fullwidth">
				<thead class="table-head-color blue">
					<tr>
						<th>Items</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="item in model.items">
						<td>{{item.name}}{{item.description}}</td>
						<td>{{item.qty}}</td>
						<td>{{item.unit_price}}</td>
						<td>{{item.unit_price * item.qty}}</td>
					</tr>
				</tbody>
			</table>
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