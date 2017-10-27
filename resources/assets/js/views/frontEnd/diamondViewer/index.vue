<template>
<div class="box">
	<div class="level">

	</div>

	<nav >
	  <div class="navbar-item is-hidden-mobile">
		<div class="tile is-ancestor">
			<div class="tile is-12">
		    	<div class="tile is-parent">
		    		<article class="tile is-child box " >
		            	<div>Shape</div>
		            	<button v-for="(value, index) in query.search_conditions.shape" class="button " :class=" {'is-info active' : query.search_conditions.shape[index].clicked} " type="button" @click="toggleValue(query.search_conditions.shape[index].clicked,'shape', index)"><img :src="'/front_end/diamond_shapes/'+query.search_conditions.shape[index].description + '.png'" height="20" width="20"></button>
					</article>
		            	<article class="tile is-child box is-info" >

		            	<div><h1 class="subtitle is-6">Price</h1></div>
		            	<div class="level">
			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[0]" @focus="$event.target.select()">

			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[1]" @focus="$event.target.select()">
			            </div>            	
		            	</article>

		            	<article class="tile is-child box" >
		            	<div><h1 class="subtitle is-6"> Weight </h1></div>
		            	<div class="level">
			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[0]" @focus="$event.target.select()">

			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[1]" @focus="$event.target.select()">		
			            </div>            	
		            	</article>
		            </div>
		    </div>
		</div>
		</div>
	</nav>

	<nav >
		<div class="navbar-item is-hidden-mobile">
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

	  </div>
	</nav>

	<div class="level is-hidden-mobile">
		<div class="level-item is-centered">
		<button class="button is-info" @click="showAdvance=!showAdvance">More Advance</button>
		</div>
	</div>
	<nav >
		<div class="navbar-item is-hidden-mobile">
		<div class="tile is-ancestor" v-if="showAdvance" >
			<div class="tile is-12">
	    		<div class="tile is-parent">
		        	<article class="tile is-child box " >
		            	<div>Polish</div>
		            	<input v-for="(value, index) in query.search_conditions.polish" class="button " :class=" {'is-info active' : query.search_conditions.polish[index].clicked} " type="button" @click="toggleValue(query.search_conditions.polish[index].clicked,'polish', index)" :value="query.search_conditions.polish[index].description"> 
					</article>

					<article class="tile is-child box" >
						<div>Symmetry</div>
						<input v-for="(value, index) in query.search_conditions.symmetry " class=" button " :class=" {'is-info active' : query.search_conditions.symmetry[index].clicked} " type="button" @click="toggleValue(query.search_conditions.symmetry[index].clicked,'symmetry', index)" :value="query.search_conditions.symmetry[index].description"> 
					</article>

					<article class="tile is-child box" >
						<div>Fluorescence</div>
						<input v-for="(value, index) in query.search_conditions.fluorescence " class=" button " :class=" {'is-info active' : query.search_conditions.fluorescence[index].clicked} " type="button" @click="toggleValue(query.search_conditions.fluorescence[index].clicked,'fluorescence', index)" :value="query.search_conditions.fluorescence[index].description"> 
					</article>
				</div>
			</div>
		</div>

	  </div>
	</nav>



<nav >
<div class="navbar-item is-hidden-desktop is-hidden-tablet is-centered">

<div @click="showModal=!showModal">

<center>
<button class="button is-info ">Search Diamonds</button>
</center>

<div class="modal" :class="{ 'is-active':showModal}">
  <div class="modal-background"></div>
  <div class="modal-card">
   <!--  <header class="modal-card-head">
      <p class="modal-card-title">Modal title</p>
      <button class="delete" aria-label="close"></button>
    </header> -->
    <section class="modal-card-body" @click="showModal=!showModal">
      <!-- Content ... -->


		<div class="tile is-ancestor">
			<div class="tile is-12">
		    	<div class="tile is-parent">
		    		<article class="tile is-child box " >
		            	<div>Shape</div>
		            	<button v-for="(value, index) in query.search_conditions.shape" class="button " :class=" {'is-info active' : query.search_conditions.shape[index].clicked} " type="button" @click="toggleValue(query.search_conditions.shape[index].clicked,'shape', index)"><img :src="'/front_end/diamond_shapes/'+query.search_conditions.shape[index].description + '.png'" height="20" width="20"></button>
					</article>
		            	<article class="tile is-child box is-info" >

		            	<div><h1 class="subtitle is-6">Price</h1></div>
		            	<div class="level">
			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[0]" @focus="$event.target.select()">

			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[1]" @focus="$event.target.select()">
			            </div>            	
		            	</article>

		            	<article class="tile is-child box" >
		            	<div><h1 class="subtitle is-6"> Weight </h1></div>
		            	<div class="level">
			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[0]" @focus="$event.target.select()">

			            	<input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[1]" @focus="$event.target.select()">		
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

		
		
		<button class="button is-info" @click="showAdvance=!showAdvance">More Advancce</button>
	


		<div class="tile is-ancestor" v-if="showAdvance" >
			<div class="tile is-12">
	    		<div class="tile is-parent">
		        	<article class="tile is-child box " >
		            	<div>Polish</div>
		            	<input v-for="(value, index) in query.search_conditions.polish" class="button " :class=" {'is-info active' : query.search_conditions.polish[index].clicked} " type="button" @click="toggleValue(query.search_conditions.polish[index].clicked,'polish', index)" :value="query.search_conditions.polish[index].description"> 
					</article>

					<article class="tile is-child box" >
						<div>Symmetry</div>
						<input v-for="(value, index) in query.search_conditions.symmetry " class=" button " :class=" {'is-info active' : query.search_conditions.symmetry[index].clicked} " type="button" @click="toggleValue(query.search_conditions.symmetry[index].clicked,'symmetry', index)" :value="query.search_conditions.symmetry[index].description"> 
					</article>

					<article class="tile is-child box" >
						<div>Fluorescence</div>
						<input v-for="(value, index) in query.search_conditions.fluorescence " class=" button " :class=" {'is-info active' : query.search_conditions.fluorescence[index].clicked} " type="button" @click="toggleValue(query.search_conditions.fluorescence[index].clicked,'fluorescence', index)" :value="query.search_conditions.fluorescence[index].description"> 
					</article>
				</div>
			</div>
		</div>
	  

    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Submit</button>
<!--       <button class="button">Cancel</button>
 -->    </footer>
  </div>
</div>
</div>
</div>
	</nav>

		<article class="message is-info">
		  <div class="message-body">
		  	<center>
		    If you could not find diamonds as your inquiry,
		    <strong><br>
			PLEASE（Whatsapp: Winnie－5484 4533， for the latest diamond Stock）</strong>
			</center>
		  </div>
		</article>
		

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
						
						<tr v-for="(row, index) in model.data" @click="clickRow(row,index)">
							<td ><img :src="'/front_end/diamond_shapes/' +row.shape+ '.png'" width="20"></td>
							<td > 
								<div v-if="row.imageLink"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
								<div v-else></div>
							</td>
							<td > ${{ row.price }}</td>
							<td > {{ row.weight }}</td>
							<td > {{ row.color }}</td>
							<td > {{ row.clarity }}</td>
							<td > {{ row.cut }}</td>
							<td > {{ row.polish }}</td>
							<td > {{ row.symmetry }}</td>
							<td > {{ row.fluorescence }}</td>
							<td > {{ row.certificate }}</td>
							<td > {{ row.lab }}</td>

						</tr>
						

					</tbody>
			

		</table>
		</div>

		<nav class="pagination is-centered" role="navigation" aria-label="pagination">
		  <a class="pagination-previous" @click="prev">Previous</a>
		  <div class="field">
 			 <div class="control">
 			 	<label>Per Page</label> 
			  	<div class="select is-primary">
					<select v-model="query.per_page" @change="fetchIndexData">
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

	import { get } from '../../../helpers/api'

	export default {

		props:[
		'title'
		],
		data(){
			return {
				source:'/api/diamonds',
				fetchData: {
					shape: ['RD','PS','EM','PR','MQ','CU','AC','OV','HT','RA'],
					 color: ['d','e','f','g','h','i','j'],
					 clarity: ['fl','if','vvs1', 'vvs2', 'vs1', 'vs2','si1','si2','i1'],
					 cut: ['ex','vg','gd','fr','na'],
					 polish: ['ex','vg','gd','fr'],
					 symmetry: ['ex','vg','gd','fr'],
					 fluorescence: ['none','faint','medium','strong'],
					 priceRange: ['100', '5000000'],
					 weight: ['0.10','20']
				},
				preset: {
					shape: ['RD','PS','EM','PR','MQ','CU','AC','OV','HT','RA'],
					 color: ['d','e','f','g','h','i','j'],
					 clarity: ['fl','if','vvs1', 'vvs2', 'vs1', 'vs2','si1','si2','i1'],
					 cut: ['ex','vg','gd','fr','na'],
					 polish: ['ex','vg','gd','fr'],
					 symmetry: ['ex','vg','gd','fr'],
					 fluorescence: ['none','faint','medium','strong'],
					 priceRange: ['100', '5000000'],
					 weight: ['0.10','20']
				},
				showModal:false,
				showAdvance:false,
				opened: [],
				model: {},
				clickedRows:[],
				columns:['shape','imageLink','price','weight','color','clarity','cut','polish','symmetry','fluorescence','certificate','lab'],
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
						{ description: 'RD', clicked: false , display: 'Round'},
						{ description: 'PS', clicked: false , display: 'Pear'},
						{ description: 'EM', clicked: false , display: 'Emerald'},
						{ description: 'PR', clicked: false , display: 'Princess'},
						{ description: 'MQ', clicked: false , display: 'Marquise'},
						{ description: 'CU', clicked: false , display: 'Cushion'},
						{ description: 'AC', clicked: false , display: 'Asscher'},
						{ description: 'OV', clicked: false , display: 'Oval'},
						{ description: 'HT', clicked: false , display: 'Heart'},
						{ description: 'RA', clicked: false , display: 'Radiant'},
						],
						color: [
						{ description: 'D', clicked: false , display: 'D'},
						{ description: 'E', clicked: false , display: 'E'},
						{ description: 'F', clicked: false , display: 'F'},
						{ description: 'G', clicked: false , display: 'G'},
						{ description: 'H', clicked: false , display: 'H'},
						{ description: 'I', clicked: false , display: 'I'},
						{ description: 'J', clicked: false , display: 'J'},
						],
						cut: [
						{ description: 'EX', clicked: false , display: 'Excellent'},
						{ description: 'VG', clicked: false , display: 'Very Good'},
						{ description: 'GD', clicked: false , display: 'Good'},
						],
						polish: [
						{ description: 'EX', clicked: false , display: 'Excellent'},
						{ description: 'VG', clicked: false , display: 'Very Good'},
						{ description: 'GD', clicked: false , display: 'Good'},
						],
						symmetry: [
						{ description: 'EX', clicked: false , display: 'Excellent'},
						{ description: 'VG', clicked: false , display: 'Very Good'},
						{ description: 'GD', clicked: false , display: 'Good'},
						],
						fluorescence: [
						{ description: 'NONE', clicked: false , display: 'None'},
						{ description: 'FAINT', clicked: false , display: 'Faint'},
						{ description: 'MEDIUM', clicked: false , display: 'Medium'},
						{ description: 'STRONG', clicked: false , display: 'Strong'},
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
			clickRow(row,index){
				this.clickedRows.push(index)
				this.$router.push(this.$route.path + '/' +row.id)
			},
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
				get(`${this.source}
					?column=${this.query.column}
					&direction=${this.query.direction}
					&page=${this.query.page}
					&per_page=${this.query.per_page}
					&search_column=${this.query.search_column}
					&search_operator=${this.query.search_operator}
					&search_input=${this.query.search_input}
					&color=${
						this.fetchData.color.toString()?this.fetchData.color.toString():this.preset.color.toString()
					}
					&clarity=${
						this.fetchData.clarity.toString()?this.fetchData.clarity.toString():this.preset.clarity.toString()
					}
					&cut=${
						this.fetchData.cut.toString()?this.fetchData.cut.toString():this.preset.cut.toString()
					}
					&polish=${
						this.fetchData.polish.toString()?this.fetchData.polish.toString():this.preset.polish.toString()
					}
					&symmetry=${
						this.fetchData.symmetry.toString()?this.fetchData.symmetry.toString():this.preset.symmetry.toString()
					}
					&fluorescence=${
						this.fetchData.fluorescence.toString()?this.fetchData.fluorescence.toString():this.preset.fluorescence.toString()
					}
					&shape=${
						this.fetchData.shape.toString()?this.fetchData.shape.toString():this.preset.shape.toString()
					}
					&price=${this.fetchData.priceRange}
					&weight=${this.fetchData.weight}`)
				.then((response)=>{
					this.model= response.data.model
					// Vue.set(vm.$data, 'columns', response.data.columns)
				}).catch(function(){
					console.log(response)
				})
			}
		}
	}

</script>