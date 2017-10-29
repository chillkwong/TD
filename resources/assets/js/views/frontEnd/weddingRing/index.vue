<template>
<div class="box">
	<div class="level">

	</div>

		<!-- <div class="tile is-ancestor" >
			<div class="tile is-parent ">
				<div class="tile is-child notification is-primary" >
					<center><h1 class="title is-5">Wedding Rings</h1>
						<h1 >
						Thank you for customers support, so that we could share their precious moments.
						</h1>
					
					</center>
				</div>
				
			</div>
		</div> -->

	<nav >
		<div class="navbar-item is-hidden-mobile">
		<div class="tile is-ancestor">
			<div class="tile is-12">
	    		<div class="tile is-parent">
		        	<article class="tile is-child box is-4" >
		            	<div>Style</div>
		            	<input v-for="(value, index) in query.search_conditions.style" class="button " :class=" {'is-info active' : query.search_conditions.style[index].clicked} " type="button" @click="toggleValue(query.search_conditions.style[index].clicked,'style', index)" :value="query.search_conditions.style[index].display"> 
					</article>

					<article class="tile is-child box is-4" >
						<div>Metal</div>
						<input v-for="(value, index) in query.search_conditions.metal " class=" button " :class=" {'is-info active' : query.search_conditions.metal[index].clicked} " type="button" @click="toggleValue(query.search_conditions.metal[index].clicked,'metal', index)" :value="query.search_conditions.metal[index].display"> 
					</article>

					<article class="tile is-child box is-2" >
						<div>Side stone</div>
						<input v-for="(value, index) in query.search_conditions.sideStone " class=" button " :class=" {'is-info active' : query.search_conditions.sideStone[index].clicked} " type="button" @click="toggleValue(query.search_conditions.sideStone[index].clicked,'sideStone', index)" :value="query.search_conditions.sideStone[index].display"> 
					</article>

					<article class="tile is-child box is-2" >
						<div>Custom-make</div>
						<input v-for="(value, index) in query.search_conditions.customized " class=" button " :class=" {'is-info active' : query.search_conditions.customized[index].clicked} " type="button" @click="toggleValue(query.search_conditions.customized[index].clicked,'customized', index)" :value="query.search_conditions.customized[index].display"> 
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
<button class="button is-info ">wedding Rings</button>
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
		        	<article class="tile is-child box" >
		            	<div>Style</div>
		            	<input v-for="(value, index) in query.search_conditions.style" class="button " :class=" {'is-info active' : query.search_conditions.style[index].clicked} " type="button" @click="toggleValue(query.search_conditions.style[index].clicked,'style', index)" :value="query.search_conditions.style[index].display"> 
					</article>

					<article class="tile is-child box" >
						<div>Metal</div>
						<input v-for="(value, index) in query.search_conditions.metal " class=" button " :class=" {'is-info active' : query.search_conditions.metal[index].clicked} " type="button" @click="toggleValue(query.search_conditions.metal[index].clicked,'metal', index)" :value="query.search_conditions.metal[index].display"> 
					</article>

					<article class="tile is-child box" >
						<div>Side stone</div>
						<input v-for="(value, index) in query.search_conditions.sideStone " class=" button " :class=" {'is-info active' : query.search_conditions.sideStone[index].clicked} " type="button" @click="toggleValue(query.search_conditions.sideStone[index].clicked,'sideStone', index)" :value="query.search_conditions.sideStone[index].display"> 
					</article>

					<article class="tile is-child box" >
						<div>Custom-make</div>
						<input v-for="(value, index) in query.search_conditions.customized " class=" button " :class=" {'is-info active' : query.search_conditions.customized[index].clicked} " type="button" @click="toggleValue(query.search_conditions.customized[index].clicked,'customized', index)" :value="query.search_conditions.customized[index].display"> 
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



		
		<div class="is-hidden-mobile">		
			<div class="tile is-ancestor" v-for="(rings,idnex) in chunkedItemsDesktop">
				<div class="tile is-parent is-3" v-for="ring in rings">
					<div class="tile is-child" v-if="ring.wedding_rings[0]">
						<article class="tile">
							<router-link :to="$route.path +'/' + ring.id" >
								<img :src="`/images/${ring.wedding_rings[0].cover}`" v-if="ring.wedding_rings[0].cover">
							<center>
								<div class="level">
									<div class="level-item is-left">
										<p  class="subtitle" v-if="ring.wedding_rings[0].unit_price">${{ring.wedding_rings[0].unit_price}}</p>
									</div>
									<div class="level-item is-right" v-if="ring.wedding_rings[1]">
										<p  class="subtitle" v-if="ring.wedding_rings[1].unit_price">${{ring.wedding_rings[1].unit_price}}</p>
									</div>
								</div>

								<div class="level">
									<div class="level-item is-left">
										<p  v-if="ring.wedding_rings[0].description">{{ring.wedding_rings[0].description}}</p>
									</div>
									<!-- <div class="level-item is-right" v-if="ring.wedding_rings[1]">
										<p  v-if="ring.wedding_rings[1].description">${{ring.wedding_rings[1].description}}</p>
									</div> -->
								</div>

							</center>
							</router-link>
							
						</article>
					</div>
				</div>
			</div>
		</div>



		<div class="is-hidden-desktop is-hidden-tablet is-centered box" >		
			<div class="level is-mobile" v-for="(rings,idnex) in chunkedItemsMobile">
				<div class="level-item" v-for="ring in rings">
					<div v-if="ring.wedding_rings[0]">
							<router-link :to="$route.path +'/' + ring.id" >
								<img width="128" height="96" :src="`/images/${ring.wedding_rings[0].cover}`" v-if="ring.wedding_rings[0].cover">
							<center>
								<div class="level">
									<div class="level-item is-left">
										<p  class="subtitle" v-if="ring.wedding_rings[0].unit_price">${{ring.wedding_rings[0].unit_price}}</p>
									</div>
									<div class="level-item is-right" v-if="ring.wedding_rings[1]">
										<p  class="subtitle" v-if="ring.wedding_rings[1].unit_price">${{ring.wedding_rings[1].unit_price}}</p>
									</div>
								</div>

								<div class="level">
									<div class="level-item is-left">
										<p  v-if="ring.wedding_rings[0].description">${{ring.wedding_rings[0].description}}</p>
									</div>
									<div class="level-item is-right" v-if="ring.wedding_rings[1]">
										<p  v-if="ring.wedding_rings[1].description">${{ring.wedding_rings[1].description}}</p>
									</div>
								</div>
							</center>
							</router-link>
					</div>
				</div>
			</div>
		</div>



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
				source:'/api/weddingRings',
				fetchData: {
					 style: ['Japanese','Vintage','1'],
					 metal: ['18KW','18KR','PT','Mixed'],
					 customized: [1,0], 
					 sideStone: [1,0], 
					 gender: ['f','m',1], 
				},
				preset: {
					 style: ['Japanese','Vintage','1'],
					 metal: ['18KW','18KR','PT','Mixed'],
					 customized: [1,0], 
					 sideStone: [1,0],
					 gender: ['f','m',1], 					 
				},
				showModal:false,
				showAdvance:false,
				opened: [],
				model: {},
				chunkedItemsDesktop: [],
				chunkedItemsMobile: [],
				sameStock: [],
				clickedRows:[],
				columns:['style','shoulder','prong'],
				query:{
					page:1,
					column: 'style',
					direction: 'asc',
					per_page: '10',
					search_column: 'id',
					search_operator: 'like',
					search_input: '',
					search_conditions:{
						style: [
						{ description: 'Japanese', clicked: false , display: 'Japanese'},
						{ description: 'Vintage', clicked: false , display: 'Vintage'},
						],
						metal: [
						{ description: '18KW', clicked: false , display: '18K White'},
						{ description: '18KR', clicked: false , display: '18K Rose Gold'},
						{ description: 'PT', clicked: false , display: 'PT950/900'},
						{ description: 'Mixed', clicked: false , display: 'Mixed'},
						],
						sideStone: [
						{ description: 1, clicked: false , display: 'True'},
						{ description: 0, clicked: false , display: 'False'},
						],
						customized: [
						{ description: 1, clicked: false , display: 'True'},
						{ description: 0, clicked: false , display: 'False'},
						],
						gender: [
						{ description: 1, clicked: false , display: 'Men'},
						{ description: 0, clicked: false , display: 'Female'},
						],
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
			styleClicked(){
				return this.query.search_conditions.style.filter( style => style.clicked)
			}
		},
		methods:{
			toggleCustomized(){
				this.fetchData.customized = !this.fetchData.customized
				this.fetchIndexData()
			},
			toggleSideStone(){
				this.fetchData.sideStone = !this.fetchData.sideStone
				this.fetchIndexData()
			},
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
			chunkItems(){
				var filtered= []
				var chunk1 = []
				var chunk2 = []
				
				filtered = this.model.data.filter(data=>data.wedding_rings.length>0)
				for (var i = 0; filtered.length - 1 >= i ; ) {
					chunk1.push(filtered.slice(i,i+4))
					i += 4
				}
				this.chunkedItemsDesktop = chunk1

				for (var i = 0; filtered.length - 1 >= i ; ) {
					chunk2.push(filtered.slice(i,i+2))
					i += 2
				}
				this.chunkedItemsMobile = chunk2

				return 
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
					&customized=${this.fetchData.customized.toString()?this.fetchData.customized:this.preset.customized.toString()}
					&sideStone=${this.fetchData.sideStone.toString()?this.fetchData.sideStone:this.preset.sideStone.toString()}
					&gender=${this.fetchData.gender.toString()?this.fetchData.gender:this.preset.gender.toString()}
					&style=${
						this.fetchData.style.toString()?this.fetchData.style.toString():this.preset.style.toString()
					}
					&metal=${
						this.fetchData.metal.toString()?this.fetchData.metal.toString():this.preset.metal.toString()
					}
					`)
				.then((response)=>{
					this.model= response.data.model
					// Vue.set(vm.$data, 'columns', response.data.columns)
					this.chunkItems()
					this.pairUp()

				}).catch(function(){
					console.log(response)
				})
				
			}

		}
	}

</script>