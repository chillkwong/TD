<template>
	<div class="container">
	<nav class="level">
		
	</nav>
	<div v-if="fullpath">
	<div class="columns">
		<div class="column is-left">
			<router-link :to="'/invoices/pdf/' + model.id" class="button is-primary">Print</router-link>
		</div>
		<div class="column is-right">
			
			<router-link :to="'/adm/invoices/create'" class="button is-primary">Create</router-link>
			<router-link :to="'/adm/invoices/' + model.id + '/edit'" class="button is-primary">Edit</router-link>
			<button class="button is-primary" @click="remove">Delete</button>
			</div>
		</div>

	</div>
	<div class="box">
		<div class="columns">
			<div class="column">
				
			      <img :src="images.company.logo" alt="Bulma: a modern CSS framework based on Flexbox" width="60" height="200">
			   
			</div>
			<div class="column is-5">
				<h1 class="title is-1">Invoice</h1>			
				<h1 class="title is-4">{{company.info.name}}</h1>			
				<h1 class="subtitle is-6">{{company.info.address}}</h1>
				<h1 class="subtitle is-6">Tel: {{company.info.contact}}</h1>
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
			<div class="column is-3">
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

    <div class="tile">
   
        <article class="tile notification is-primary">
    
        </article>
       </div>
		<table class="table is-fullwidth">
				<thead>
					<tr>
						<th>Items</th>
						<th>Desciption</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="diamond in model.inv_diamonds" v-if="model.inv_diamonds">
						<td>GIA:{{diamond.certificate}}</td>
						<td>{{diamond.weight}},{{diamond.color}},{{diamond.clarity}},{{diamond.cut}},{{diamond.polish}},{{diamond.symmetry}},{{diamond.fluroscence}}</td>
						<td>1</td>
						<td>{{diamond.price}}</td>
					</tr>
					<tr v-for="jewellry in model.jewellries" v-if="model.jewellries">
						<td>{{jewellry.name}}</td>
						<td>{{jewellry.description}}</td>
						<td>1</td>
						<td>{{jewellry.unit_price}}</td>						
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="2"></td>
						<td><p class="subtitle is-6"><strong>Deposit:</strong></p></td>
						<td>${{model.deposit}}</td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td><p class="subtitle is-6"><strong>Balance:</strong></p></td>
						<td>${{model.balance}}</td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td><strong>Total:</strong></td>
						<td>${{model.total}}</td>
					</tr>
				</tfoot>
			</table>
			<hr>
			<div class="columns">
				<div class="column">
					<p class="box">Notes:
						{{model.notes}}
					</p>
				</div>
			</div>
		</div>
	</div>
</template>

<script>

	import Vue from 'vue'
	import Images from '../../helpers/images'
	import {get, del} from '../../helpers/api'

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
				redirect: '/adm/invoices'
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

				get(`/api/${this.resource}/${this.$route.params.id}`)
				.then((res)=>{
					Vue.set(this.$data, 'model', res.data.model)
					Vue.set(this.$data, 'company', res.data.company)
				})
				.catch(function(error){
					console.log(error)
				})
			},
			remove(){

				del(`/api/${this.resource}/${this.$route.params.id}`)
					.then((res)=>{
						if (res.data.deleted) {
							this.$router.push(this.redirect)
						}
					})
					.catch(function(error){
						console.log(error)
					})
						
			}
		}
	}
</script>