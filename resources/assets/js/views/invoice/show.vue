<template>
	<div class="container">
		
	</div>
</template>

<script>
	import Vue from 'vue'
	import axios from 'axios'
	export default {
		name: 'invoiceShow',
		data(){
			return {
				model: {
					customer: {},
					items: []
				},
				resource: 'invoice',
				redirect: '/invoice'
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