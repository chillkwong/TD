<template>
	<div>data</div>
</template>

<script>
	import Vue from 'vue'
	import axios from 'axios'

	export default {
		props: ['source', 'thead', 'filter', 'create', 'title'],
		data(){
			return {
				showFilter: false,
				model: {
					data:[]
				},
				params: {
					column: 'id',
					direction: 'desc',
					per_page: 10,
					page: 1,
					search_column: 'id',
					search_operator: 'equal_to',
					search_query_1: '',
					search_query_2: '',
				},
				operators: {
					equal_to: '=',
					not_equal: '<>',
					less_than:'<',
					greater_than: '>',
					less_than_or_equal_to: '<=',
					greater_than_or_equal_to: '>=',
					in: 'IN',
					not_in: 'NOT IN',
					like: 'LIKE',
					between: 'BETWEEN',
				}
			}
		},
		beforeMount(){
			this.fetchData()
		},
		methods: {
			next(){
				if (this.model.next_page_url) {
					this.params.page++
					this.fetchData()
				}
			},
			prev(){
				if (this.model.prev_page_url) {
					this.params.page--
					this.fetchData()
				}
			},
			sort(column){
				if (column === this.params.column) {
					if (this.params.direction === 'desc') {
						this.params.direction = 'asc'
					}else{
						this.params.direction = 'desc'
					}
				}else{
					this.params.column = column
					this.params.direction ='asc'
				}
				this.fetchData()
			},
			fetchData(){
				var vm = this
				axios.get(this.buildURL())
					.then(function(response){
						Vue.set(vm.$data, 'model', response.data.model)
					})
					.catch(function(error){
						console.log(error)
					})
			},
			buildURL(){
				var p = this.params
				return `${this.source}?column=${p.column}&direction=${p.direction}&per_page=${p.per_page}&page=${p.page}&search_column=${p.search_column}&search_operator=${p.search_operator}&search_query_1=${p.search_query_1}&search_query_2=${p.search_query_2}`
			}
		}
	}
</script>