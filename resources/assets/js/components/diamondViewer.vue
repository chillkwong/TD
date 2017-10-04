<template>
<div>
	<div class="level">
		<div class="level-left">

			<div class="level-item">
				{{ title }}
			</div>

			<div class="level-item"> 
				<span>Search:</span>
				<select class="select" v-model="query.search_column">
				<option class="option" v-for="column in columns" :value="column ">{{ column }}</option>
					
				</select>
				
			</div>

			<div class="level-item">
				<select class="select" v-model="query.search_operator">
					<option class="option" v-for="(value, key) in operators" :value="key" >{{ value }}</option>
				</select>
			</div>
		</div>	
		<div class="level-left">
			<div class="level-item">
				<input type="text" class="input" 
				placeholder="search" 
				v-model="query.search_input"
				@keyup.enter="fetchIndexData()">
			</div>
			
			<div class="level-item">
				<button class="button is-primary" @click="fetchIndexData()">filter</button>
			</div>
		</div>
	</div>

		<div class="tile is-ancestor">
			<div class="tile is-12">
		    	<div class="tile is-parent">
		            	<article class="tile is-child box is-info" >

		            	<div><h1 class="subtitle is-6">Price</h1></div>
		            	<div class="level">
			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[0]">

			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[1]">
			            </div>            	
		            	</article>

		            	<article class="tile is-child box" >
		            	<div><h1 class="subtitle is-6"> Weight </h1></div>
		            	<div class="level">
			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[0]">

			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[1]">		
			            </div>            	
		            	</article>
		            </div>
		    </div>
		</div>

		<div class="tile is-ancestor">
		<div class="tile is-12">
    	<div class="tile is-parent">
        	<article class="tile is-child box " >
            	<div>Color</div>
				<input class="button " :class=" {'is-info active' : query.search_conditions.color[0].clicked} " type="button" @click="toggleValue(query.search_conditions.color[0].clicked,'color', 0)" :value="query.search_conditions.color[0].description"> 
				<input class=" button " :class=" { 'is-info active' : query.search_conditions.color[1].clicked} " type="button" @click="toggleValue(query.search_conditions.color[1].clicked,'color', 1)" :value="query.search_conditions.color[1].description"> 
				<input class=" button " :class=" { 'is-info active' : query.search_conditions.color[2].clicked} "  type="button" @click="toggleValue(query.search_conditions.color[2].clicked,'color', 2)" :value="query.search_conditions.color[2].description"> 
				<input class=" button " :class=" { 'is-info active' : query.search_conditions.color[3].clicked} "  type="button" @click="toggleValue(query.search_conditions.color[3].clicked,'color', 3)" :value="query.search_conditions.color[3].description"> 
				<input class=" button " :class=" { 'is-info active' : query.search_conditions.color[4].clicked} "  type="button" @click="toggleValue(query.search_conditions.color[4].clicked,'color', 4)" :value="query.search_conditions.color[4].description"> 
				<input  class=" button " :class=" { 'is-info active' : query.search_conditions.color[5].clicked} " type="button" @click="toggleValue(query.search_conditions.color[5].clicked,'color', 5)" :value="query.search_conditions.color[5].description"> 
				<input class=" button " :class=" { 'is-info active' : query.search_conditions.color[6].clicked} "  type="button" @click="toggleValue(query.search_conditions.color[6].clicked,'color', 6)" :value="query.search_conditions.color[6].description"> 
			</article>

			<article class="tile is-child box" >
				<div>Clarity</div>
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[0].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[0].clicked,'clarity', 0)" :value="query.search_conditions.clarity[0].description"> 
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[1].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[1].clicked,'clarity', 1)" :value="query.search_conditions.clarity[1].description"> 
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[2].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[2].clicked,'clarity', 2)" :value="query.search_conditions.clarity[2].description"> 
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[3].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[3].clicked,'clarity', 3)" :value="query.search_conditions.clarity[3].description"> 
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[4].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[4].clicked,'clarity', 4)" :value="query.search_conditions.clarity[4].description"> 
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[5].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[5].clicked,'clarity', 5)" :value="query.search_conditions.clarity[5].description"> 
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[6].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[6].clicked,'clarity', 6)" :value="query.search_conditions.clarity[6].description"> 
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[7].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[7].clicked,'clarity', 7)" :value="query.search_conditions.clarity[7].description"> 
				<input class=" button " :class=" {'is-info active' : query.search_conditions.clarity[8].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[8].clicked,'clarity', 8)" :value="query.search_conditions.clarity[8].description"> 
				</article>
			</div>
			</div>
		</div>
		<div class="tile">
		<table class="table is-striped is-narrow is-fullwidth">
			<div class="dv-body">
				<div class="dv-table table table-hover">
					<thead>
						<tr>
							<th v-for="column in columns" @click="toggleOrder(column)"> 
								<span>{{ column }}</span>
								<span class="dv-table-column" v-if="column === query.column">
									<span v-if="query.direction === 'desc' ">&uarr;</span>
									<span v-else >&darr;</span>
								</span>
							</th>
						</tr>
					</thead>

					<tbody>
						<tr v-for="row in model.data">
							<td v-for="(value,key) in row"> {{ value }}</td>
						</tr>
					</tbody>
				</div>
			</div>

			<div class="dv-footer">
				<div class="dv-footer-item">
					<span>Displaying {{ model.from }}  - {{ model.to }} of {{ model.total }} rows</span>
				</div>
				<div class="dv-footer-item">
					<span>Rows per page</span>
					<input type="text" 
					v-model="query.per_page" 
					class="dv-footer-input"
					 @keyup.enter="fetchIndexData()">
				</div>
				<div class="dv-footer-sub">
					<button class="dv-footer-btn"	 @click="prev()">&laquo;</button>
					<input type="text" 
					v-model="query.page" 
					class="dv-footer-input"
					 @keyup.enter="fetchIndexData()">
					<button class="dv-footer-btn" @click="next()">&raquo;</button>
				</div>
			</div>
		</table>
		</div>
	</div>

</template>

<script>

	import Vue from 'vue'
	import { get } from '../helpers/api'

	export default {

		props:[
		'title'
		],
		data(){
			return {
				source:'/api/diamonds',
				fetchData: {
					color: ['d','e','f','g'],
					 cut: ['ex','vg','gd'],
					 clarity: ['fl','if','vvs1', 'vvs2', 'vs1', 'vs2'],
					 priceRange: ['100', '5000000'],
					 weight: ['0.10','20']
				},
				model: {},
				columns:{},
				query:{
					page:1,
					column: 'price',
					direction: 'asc',
					per_page: 10,
					search_column: 'id',
					search_operator: 'like',
					search_input: '',
					search_conditions:{
						color: [
						{ description: 'D', clicked: false},
						{ description: 'E', clicked: false},
						{ description: 'F', clicked: false},
						{ description: 'G', clicked: false},
						{ description: 'H', clicked: false},
						{ description: 'I', clicked: false},
						{ description: 'J', clicked: false},
						],
						cut: [
						{ description: 'EX', clicked: false},
						{ description: 'VG', clicked: false},
						{ description: 'GD', clicked: false},
						],
						clarity: [
						{ description: 'FL', clicked: false},
						{ description: 'IF', clicked: false},
						{ description: 'VVS1', clicked: false},
						{ description: 'VVS2', clicked: false},
						{ description: 'VS1', clicked: false},
						{ description: 'VS2', clicked: false},
						{ description: 'SI1', clicked: false},
						{ description: 'SI2', clicked: false},
						{ description: 'I1', clicked: false},
						],
						priceRange: [
						{ description: 'Price' },
						{ description: 'minPrice' },
						]
					}
				},
				operators: {
					equal : '=',
					not_equal :  '<>',
					less_than :  '<',
					greater_than :  '>',
					less_than_or_equal_to :  '<=',
					greater_than_or_equal_to : '>=',
					in : 'IN',
					like: 'LIKE'
					},
			};
		},
		created(){
			this.fetchIndexData();
		},
		computed:{
			colorClicked(){
				return this.query.search_conditions.color.filter( color => color.clicked)
			}
		},
		methods:{
			filterFalse(condition){
				var checked = this.query.search_conditions[condition].filter( condition => condition.clicked)
				this.filterDescriptions(checked)
    				this.fetchData[condition] = checked;

   				this.fetchIndexData();    				
			},
			filterDescriptions(checked){
				for (var i = checked.length - 1; i >= 0; i--) {
					checked[i]=  checked[i].description		
				}
			},
			toggleValue(query, condition, number){
				var search_conditions = this.query.search_conditions[condition]
					
					if (query === false) {
						search_conditions[number].clicked = true
					}else{
						search_conditions[number].clicked = false
					}

				this.filterFalse(condition); 
			},
			// toggleValueToFalseOnce(condition){
			// 	var search_conditions = this.query.search_conditions[condition]
			// 	for (var i = search_conditions.length - 1; i >= 0; i--) {
			// 			search_conditions[i].clicked = false;
			// 		}
			// },
			next(){
				if (this.model.next_page_url) {
					this.query.page++
					this.fetchIndexData()
				}
			},
			prev(){
				if (this.model.prev_page_url) {
					this.query.page--
					this.fetchIndexData()
				}
			},
			toggleOrder(column){
				if (column === this.query.column) {
					if (this.query.direction === 'desc') {
						this.query.direction = 'asc'
					}else{
						this.query.direction = 'desc'
					}
				}else{
					this.query.column = column
					this.direction = 'asc'

				}
				this.fetchIndexData()
			},
			fetchIndexData(){
			var vm = this;
				get(`${this.source}
					?column=${this.query.column}
					&direction=${this.query.direction}
					&page=${this.query.page}
					&per_page=${this.query.per_page}
					&search_column=${this.query.search_column}
					&search_operator=${this.query.search_operator}
					&search_input=${this.query.search_input}
					&color=${this.fetchData.color.toString()}
					&clarity=${this.fetchData.clarity.toString()}
					&cut=${this.fetchData.cut.toString()}
					&price=${this.fetchData.priceRange}
					&weight=${this.fetchData.weight}`)
				.then(function(response){
					Vue.set(vm.$data, 'model', response.data.model)
					Vue.set(vm.$data, 'columns', response.data.columns)
				}).catch(function(){
					console.log(response)
				})
			}
		}
	}

</script>