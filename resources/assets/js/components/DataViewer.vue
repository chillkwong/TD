<template>
	<div class="container is-fluid">
		<nav class="level">
		  <!-- Left side -->
		  <div class="level-left">
		    <div class="level-item">
		      <p class="subtitle is-5">
		        <strong>{{title}}</strong>
		      </p>
		    </div>
		  </div>

		  <!-- Right side -->
		  <div class="level-right">
		  <router-link :to="create" class="button is-primary">Create</router-link>
		    <p class="control">
		     <button @click="showFilter = !showFilter">Filter</button>
		    </p>
		  </div>
		</nav>

		<div class="level" v-if="showFilter">
			<div class="level-left">
				<div class="level-item">
					<div class="select">
					  <select v-model="params.search_column">
					    <option v-for="column in filter" :value="column">{{column}}</option>
					  </select>
					</div>
				</div>
				<div class="level-item">
					<div class="select">
					  <select v-model="params.search_operator">
					    <option v-for="(value, key) in operators" :value="key">{{value}}</option>
					  </select>
					</div>
				</div>
			</div>
			<div class="level-right">
				<div class="level-item">
				  <input type="text" class="input is-info" v-model="params.search_query_1" 
					@keyup.enter="fetchData" placeholder="Search">
				</div>
				<div class="level-item">
				  <input type="text" class="input is-info" v-model="params.search_query_2" 
						@keyup.enter="fetchData" placeholder="Search" v-if="params.search_operator === 'between' ">
				</div>
				<button class="button is-info" @click="fetchData">Filter</button>
			</div>
		</div>
		<table class="table is-fullwidth">
			<thead>
				<tr>
					<th v-for="item in thead">
							<div  @click="sort(item.key)" v-if="item.sort">
								<span>{{item.title}}</span>
								<span v-if="params.column === item.key">
									<span v-if="params.direction === 'asc' ">&#x25B2;</span>
									<span v-else>&#x25BC;</span>
								</span>
							</div>
								<div v-else>
									<span>{{item.title}}</span>
								</div>							
						</th>
				</tr>
			</thead>
			<tbody>
					<slot v-for="item in model.data" :item="item"></slot>
			</tbody>
		</table>
		<nav class="pagination is-centered" role="navigation" aria-label="pagination">
		  <a class="pagination-previous" @click="prev">Previous</a>
		  <div class="field">
 			 <div class="control">
 			 	<label>Per Page</label> 
			  	<div class="select is-primary">
					<select v-model="params.per_page" @change="fetchData">
						<option>10</option>
						<option>25</option>
						<option>50</option>
					</select>
				</div>
			</div>
		</div>
		  <a class="pagination-next" @click="next">Next page</a>
		  <ul class="pagination-list">
		    <li><a class="button" aria-label="Goto page 1" @click="moveTo(-5)" :disabled="params.page<5">{{params.page<5 ? 0: params.page-5}}</a></li>
		    <li><span class="pagination-ellipsis">&hellip;</span></li>
		    <li><a class="pagination-link" aria-label="Goto page 86" :diable="params.page" @click="moveTo(-1)">{{params.page-1}}</a></li>
		    <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">{{params.page}}</a></li>
		    <li><a class="pagination-link" aria-label="Goto page 86" :diable="params.page>params.last_page" @click="moveTo(1)">{{params.page+1}}</a></li>   
		    <li><span class="pagination-ellipsis">&hellip;</span></li>
		    <li><a class="pagination-link" aria-label="Goto page 86"  @click="moveTo(5)">{{5+params.page}}</a></li>
		  </ul>
		</nav>
		
	</div>
</template>

<script>

	import Vue from 'vue'
	import { get } from '../helpers/api'
	// import Pagination from '../components/pagination.vue'

	export default {
		props: ['source', 'thead', 'filter', 'create', 'title'],
		// components: { Pagination},
		data(){
			return {
				showFilter: true,
				model: {
					data:[]
				},
				params: {
					column: 'id',
					direction: 'desc',
					per_page: 10,
					page: 1,
					search_column: 'id',
					search_operator: 'like',
					search_query_1: '',
					search_query_2: '',
				},
				operators: {
					like: 'LIKE',
					equal_to: '=',
					not_equal: '<>',
					less_than:'<',
					greater_than: '>',
					less_than_or_equal_to: '<=',
					greater_than_or_equal_to: '>=',
					in: 'IN',
					not_in: 'NOT IN',
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
			moveTo(page){
					if (this.params.page + page >0 ) {
					this.params.page = this.params.page + page
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

					get(this.buildURL())
					.then((res)=>{
						Vue.set(this.$data, 'model', res.data.model)
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