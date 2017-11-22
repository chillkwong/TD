import { get } from '../../../helpers/api'
import router from '../../../router'

import { transJs } from '../../../helpers/transJs'
import langs from '../../../langs/engagementRings'

	export default {
		el:'#engagementRings',
		router,
		props:[
		'title'
		],
		data(){
			return {
				source:'/api/engagementRings',
				fetchData: {
					 style: ['Solitaire','Side-stone','Halo'],
					 prong: ['4-prong','6-prong'],
					 shoulder: ['Tapering','Parallel','Twisted'],
					 customized: [1,0], 
					 
				},
				preset: {
					 style: ['Solitaire','Side-stone','Halo'],
					 prong: ['4-prong','6-prong'],
					 shoulder: ['Tapering','Parallel','Twisted'],
					 customized: [1,0], 
					 
				},
				langs,
				showModal:false,
				showAdvance:false,
				opened: [],
				model: {},
				chunkedItemsDesktop: [],
				chunkedItemsMobile: [],
				clickedRows:[],
				columns:['style','shoulder','prong'],
				query:{
					page:1,
					column: 'style',
					direction: 'asc',
					per_page: 10,
					search_column: 'id',
					search_operator: 'like',
					search_input: '',
					search_conditions:{
						style: [
						{ description: 'Solitaire', clicked: false , display: 'Solitaire'},
						{ description: 'Side-stone', clicked: false , display: 'Side-stone'},
						{ description: 'Halo', clicked: false , display: 'Halo'},
						],
						prong: [
						{ description: '4-prong', clicked: false , display: '4-claw prong'},
						{ description: '6-prong', clicked: false , display: '6-claw prong'},
						],
						shoulder: [
						{ description: 'Tapering', clicked: false , display: 'Tapering'},
						{ description: 'Parallel', clicked: false , display: 'Parallel'},
						{ description: 'Twisted', clicked: false , display: 'Twisted'},
						],
						customized: [
						{ description: 1, clicked: false , display: 'Yes'},
						{ description: 0, clicked: false , display: 'No'},
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
			if (this.$route.fullPath.slice(3).includes('engagement-rings/solitaire-ring-setting')) {
				this.fetchData.style = ['Solitaire']
				this.query.search_conditions.style[0].clicked = true
			}
			if (this.$route.fullPath.slice(3).includes('engagement-rings/side-stones-setting')) {
				this.fetchData.style = ['Side-stone']
				this.query.search_conditions.style[1].clicked = true
			}
			if (this.$route.fullPath.slice(3).includes('engagement-rings/halo-setting')) {
				this.fetchData.style = ['Halo']
				this.query.search_conditions.style[2].clicked = true
			}
			this.fetchIndexData();
		},
		computed:{
			styleClicked(){
				return this.query.search_conditions.style.filter( style => style.clicked)
			},
			locale(){
				
				if (this.$route.fullPath.slice(1,3) == 'en') {
					return 0
				}
				if (this.$route.fullPath.slice(1,3) == 'hk') {
					return 1
				}
				if (this.$route.fullPath.slice(1,3) == 'cn') {
					return 2
				}
			}
		},
		filters:{
			transJs,
		},
		methods:{
			toggleCustomized(){
				this.fetchData.customized = !this.fetchData.customized
				this.fetchIndexData()
			},
			clickRow(row,index){
				this.clickedRows.push(index)
				window.open(this.$route.path + '/' +row.id, '_self')
			},
			toggle(id) {
		    	const index = this.model.data.indexOf(id);
		      if (index > -1) {
		      	this.model.data.splice(index, 1)
		      } else {
		      	this.model.data.push(id)
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
			more(){
				
					this.query.per_page  +=10
					this.fetchIndexData()
				
			},
			chunkItems(){
				var chunk1 = []
				var chunk2 = []
				
				for (var i = 0; this.model.data.length - 1 >= i ; ) {
					chunk1.push(this.model.data.slice(i,i+4))
					i += 4
				}
				this.chunkedItemsDesktop = chunk1

				for (var i = 0; this.model.data.length - 1 >= i ; ) {
					chunk2.push(this.model.data.slice(i,i+2))
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
					&style=${
						this.fetchData.style.toString()?this.fetchData.style.toString():this.preset.style.toString()
					}
					&shoulder=${
						this.fetchData.shoulder.toString()?this.fetchData.shoulder.toString():this.preset.shoulder.toString()
					}
					&prong=${
						this.fetchData.prong.toString()?this.fetchData.prong.toString():this.preset.prong.toString()
					}`)
				.then((response)=>{
					this.model= response.data.model
					// Vue.set(vm.$data, 'columns', response.data.columns)
					this.chunkItems()

				}).catch(function(){
					console.log(response)
				})
				
			}

		}
	}