import { get } from '../../../helpers/api'
import router from '../../../router'

import { transJs } from '../../../helpers/transJs'
import langs from '../../../langs/customerJewellry'

export default {
		el: '#customerJewellryIndex',
		router,	
	data(){
		return {
			query:{
				per_page: 10,
			},
			langs,
			posts: [],
			chunkedItemsDesktop:{},
			chunkedItemsMobile:{},			
		}
	},
	watch:{
		'$route': 'fetchData'
	},
	beforeMount(){
		this.fetchData()
	},
	computed:{
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
		more(){
				
					this.query.per_page  +=10
					this.fetchData()
				
			},
		chunkItems(){
				var chunk1 = []
				var chunk2 = []
				
				for (var i = 0; this.posts.data.length - 1 >= i ; ) {
					chunk1.push(this.posts.data.slice(i,i+4))
					i += 4
				}
				this.chunkedItemsDesktop = chunk1

				for (var i = 0; this.posts.data.length - 1 >= i ; ) {
					chunk2.push(this.posts.data.slice(i,i+2))
					i += 2
				}
				this.chunkedItemsMobile = chunk2

				return 
			},
		clickRow(row,index){
				this.onClickedRow = row.id
				window.open('customer-jewellries/'+row.id, '_self')
			},
		fetchData(){
			get(`/api/invPosts?per_page=${this.query.per_page}`, this.$route.fullPath.slice(1,3),)
			.then((res)=>{
				this.posts = res.data.posts
				this.chunkItems()
			})
		}
	}
}