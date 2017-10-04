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
		    		<article class="tile is-child box " >
		            	<div>Shape</div>
		            	<button v-for="(value, index) in query.search_conditions.shape" class="button " :class=" {'is-info active' : query.search_conditions.shape[index].clicked} " type="button" @click="toggleValue(query.search_conditions.shape[index].clicked,'shape', index)"><img :src="'/images/diamond_shapes/'+query.search_conditions.shape[index].description + '.png'" height="20" width="20"></button>
					</article>
		            	<article class="tile is-child box is-info" >

		            	<div><h1 class="subtitle is-6">Price</h1></div>
		            	<div class="level">
			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[0]" @focus.native="$event.target.select()">

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
            	<input v-for="(value, index) in query.search_conditions.color" class="button " :class=" {'is-info active' : query.search_conditions.color[index].clicked} " type="button" @click="toggleValue(query.search_conditions.color[index].clicked,'color', index)" :value="query.search_conditions.color[index].description"> 
			</article>

			<article class="tile is-child box" >
				<div>Clarity</div>
				<input v-for="(value, index) in query.search_conditions.clarity " class=" button " :class=" {'is-info active' : query.search_conditions.clarity[index].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[index].clicked,'clarity', index)" :value="query.search_conditions.clarity[index].description"> 
			</article>

			<article class="tile is-child box" >
				<div>Cut</div>
				<input v-for="(value, index) in query.search_conditions.cut " class=" button " :class=" {'is-info active' : query.search_conditions.cut[index].clicked} " type="button" @click="toggleValue(query.search_conditions.cut[index].clicked,'cut', index)" :value="query.search_conditions.cut[index].description"> 
			</article>
			</div>
			</div>
		</div>

		<div class="tabs">
		<table class="table is-striped is-narrowed is-fullwidth ">
					<thead>
						<tr class="is-selected ">
							<th v-for="column in columns" @click="toggleOrder(column)"> 
								<span>{{ column }}</span>
								<span class="dv-table-column" v-if="column === query.column">
									<span v-if="query.direction === 'desc' ">&#x25BC;</span>
									<span v-else >&#x25B2;</span>
								</span>
							</th>
						</tr>
					</thead>

					<tbody>
						
						<tr v-for="(row, index) in model.data" @click="$router.push($route.path + '/' +row.id)">
							<td > {{ row.id }}</td>
							<td > {{ row.price }}</td>
							<td > {{ row.shape }}</td>
							<td > {{ row.weight }}</td>
							<td > {{ row.color }}</td>
							<td > {{ row.clarity }}</td>
							<td > {{ row.cut }}</td>
							<td > {{ row.polish }}</td>
							<td > {{ row.symmetry }}</td>
							<td > {{ row.fluroscence }}</td>
							<td > {{ row.certificate }}</td>
							<td > {{ row.lab }}</td>

						</tr>
						
						<!-- <tr v-for="row in model.data" v-if="opened.includes(row.id)">
				        <td colspan="12">ON!</td>
				     	</tr> -->

					</tbody>
				
			<!--<div class="dv-footer">
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
			</div> -->

		</table>
		</div>

		<nav class="pagination is-centered" role="navigation" aria-label="pagination">
		  <a class="pagination-previous" @click="prev">Previous</a>
		  <div class="field">
 			 <div class="control">
 			 	<label>Per Page</label> 
			  	<div class="select is-primary">
					<select v-model="model.per_page" @change="fetchData">
						<option>10</option>
						<option>25</option>
						<option>50</option>
					</select>
				</div>
			</div>
		</div>
		  <a class="pagination-next" @click="next">Next</a>
		  <ul class="pagination-list">
		    <li><a class="button" aria-label="Goto page 1" @click="moveTo(-5)" :disabled="model.current_page<5">{{model.current_page<5 ? 0: model.current_page-5}}</a></li>
		    <li><span class="pagination-ellipsis">&hellip;</span></li>
		    <li><a class="pagination-link" aria-label="Goto page 86" :diable="model.current_page" @click="moveTo(-1)">{{model.current_page-1}}</a></li>
		    <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">{{model.current_page}}</a></li>
		    <li><a class="pagination-link" aria-label="Goto page 86" :diable="model.current_page>model.last_page" @click="moveTo(1)">{{model.current_page+1}}</a></li>   
		    <li><span class="pagination-ellipsis">&hellip;</span></li>
		    <li><a class="pagination-link" aria-label="Goto page 86"  @click="moveTo(5)">{{5+model.current_page}}</a></li>
		  </ul>
		</nav>

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
					shape: ['rd','ps','em','pr','mq','cu','ac','ov','ht','ra'],
					 color: ['d','e','f','g','h','i','j','k'],
					 clarity: ['fl','if','vvs1', 'vvs2', 'vs1', 'vs2'],
					 cut: ['ex','vg','gd','fr','na'],
					 polish: ['ex','vg','gd','fr'],
					 symmetry: ['ex','vg','gd','fr'],
					 priceRange: ['100', '5000000'],
					 weight: ['0.10','20']
				},
				opened: [],
				model: {},
				columns:['id','price','shape','weight','color','clarity','cut','polish','symmetry','fluroscence','certificate','lab'],
				query:{
					page:1,
					column: 'price',
					direction: 'asc',
					per_page: 10,
					search_column: 'id',
					search_operator: 'like',
					search_input: '',
					search_conditions:{
						shape: [
						{ description: 'rd', clicked: false},
						{ description: 'ps', clicked: false},
						{ description: 'em', clicked: false},
						{ description: 'pr', clicked: false},
						{ description: 'mq', clicked: false},
						{ description: 'cu', clicked: false},
						{ description: 'ac', clicked: false},
						{ description: 'ov', clicked: false},
						{ description: 'ht', clicked: false},
						{ description: 'ra', clicked: false},
						],
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
						{ description: 'FR', clicked: false},
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
			toggle(id) {
		    	const index = this.model.data.indexOf(id);
		      if (index > -1) {
		      	this.model.data.splice(index, 1)
		      } else {
		      	this.model.data.push(id)
		      }
		    },
			moveTo(page){
					if (this.query.page + page >0 ) {
					this.query.page = this.query.page + page
					this.fetchIndexData()
				}				
			},
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
					&shape=${this.fetchData.shape.toString()}
					&price=${this.fetchData.priceRange}
					&weight=${this.fetchData.weight}`)
				.then(function(response){
					Vue.set(vm.$data, 'model', response.data.model)
					// Vue.set(vm.$data, 'columns', response.data.columns)
				}).catch(function(){
					console.log(response)
				})
			}
		}
	}

</script>