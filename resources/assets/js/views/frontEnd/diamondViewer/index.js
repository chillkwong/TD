import { get } from '../../../helpers/api'
import router from '../../../router'

import { transJs } from '../../../helpers/transJs'
import langs from '../../../langs/diamondViewer'

	export default {
		el: '#diamondViewerIndex',
		router,
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
				onClickedRow: '',
				showModal:false,
				showAdvance:false,
				opened: [],
				model: {},
				langs,
				clickedRows:[],
				columnsToggle:[
				{display:'shape',value: 'shape' },
				{display:'imageLink',value: 'imageLink' },
				{display:'price',value: 'price' },
				{display:'weight',value: 'weight' },
				{display:'color',value: 'color' },
				{display:'clarity',value: 'clarity' },
				{display:'cut',value: 'cut' },
				{display:'polish',value: 'polish' },
				{display:'symmetry',value: 'symmetry' },
				{display:'fluorescence',value: 'fluorescence' },
				{display:'certificate',value: 'certificate' },
				{display:'lab',value: 'lab' },],
				
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
			clickRow(row,index){
				this.onClickedRow = row.id
				window.open('gia-loose-diamonds/'+row.id, '_self')
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
					this.model= response.data.model
					// Vue.set(vm.$data, 'columns', response.data.columns)
				}).catch(function(){
					console.log(response)
				})
			}
		}
	}