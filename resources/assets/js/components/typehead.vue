<template>
	<!-- <div class="box"> -->
		<div :class="typeheadState">
			<div class="typehead__toggle" ref="toggle">
				<input class="typehead__search" type="text" ref="search" @mousedown.prevent="toggle" 
				@focus="onFocus" 
				@blur="onBlur" 
				@keydown.esc="onEscape"
				@keydown.down="onDownKey"
				@keydown.up="onUpKey"
				@keydown.enter="onEnterKey"
				v-model="search">
				<span class="typehead__text" ref="text">{{displayText}}</span>
				<ul v-if="open" class="typehead__list">
					<li class="typehead__item" v-for="(option, index) in filteredOptions" :key="index">
						<a :class="[selectIndex === index? 'typehead__active':'']" class="typehead__link" @mousedown.prevent="select(option)">{{option.text}}</a>
					</li>
				</ul>
			</div>
		</div>
	<!-- </div> -->
</template>

<script type="text/javascript">
	
	export default{
		props: {
			options:{
				type: Array,
				default(){
					return []
				}
			},
				value:{
					type:[String, Number]
					default: null
				}
		},
		data(){
			return {
				selectIndex:0,
				open: false,
				displayText: '',
				search: ''
			}
		},
		computed: {
			typeheadState(){
				return this.open?'typehead typehead__open': 'typehead'
			},
			filteredOptions(){
				const exp = new RegExp(this.search, 'i')
				return this.options.filter((option)=>{
					return (exp.test(option.id) || exp.test(option.text))
				})
			}
		},
		methods:{
			select(option){
				this.displayText = option.text
				this.$emit('input',(option.id))
				this.$refs.search.blur()
			},
			toggle(e){
				if (e.target === this.$refs.toggle ||
					e.target === this.$refs.search ||
					e.target === this.$refs.text) {
					if (this.open) {
						if (e.target !== this.$refs.search &&
							e.target !== this.$refs.text) {
						this.$refs.search.blur()
						}
					}else{
						this.$refs.search.focus()
					}
				}
			},
			onFocus(){
				this.open = true
			},
			onBlur(){
				this.search =''
				this.open = false
			},
			onEscape(){
				this.$refs.search.blur()
			},
			onUpKey(){
				if (this.selectIndex > 0) {
					this.selectIndex --
				}
			},
			onDownKey(){
				if (this.filteredOptions.length -1 > this.selectIndex) {
					this.selectIndex ++
				}
			},
			onEnterKey(){
				const option = this.filteredOptions[this.selectIndex]
				if (option) {
					this.select(option)
				}
			}
		}
	}
</script>


<style type="text/css">
	.typehead{
		border-radius:3px;
		border: 1px solid #ccc;
		position: relative;
		z-index:1;
		width: 100%;
		font-size:14px;
	}
	.typehead__open{
		border:1px solid #41B881;
	}
	.typehead__open .typehead__text{
		color:#999;
		opacity: 0.4;
	}
	.typehead__active{
		background:#41B883;
		color: #fff;
	}
	.typehead__toggle{
		position:relative;
		z-index:1;
		width:100%;

	}
	.typehead__search{
		position:absolute;
		top:0;
		left:0;
		line-height:1em;
		font-size:1em;
		padding:10px;
		width:100%;
		display:block;
		cursor: text;
		background:transparent;
		border:none;
		outline:none;
		z-index:2;
	}
	.typehead__text{
		min-height:36px;
		font-size:1em;
		line-height:1em;
		padding:10px;
		display:inline-block;
		position:relative;
	}
	.typehead__list{
		margin:0;
		padding:0;

	}
	.typehead__item{
		display:block;
		border-top:1px solid #f4f4f4;
	}
	.typehead_link{
		display:block;
		padding:10px;
		line-height:1em;
		font-size:1em;
		cursor:pointer;

	}
</style>



<!-- 
<template>
	<!-- <div class="box"> -->
		<div :class="typeheadState">
			<div class="typehead__toggle" ref="toggle">
				<input class="typehead__search" type="text" ref="search" @mousedown.prevent="toggle" 
				@focus="onFocus" 
				@blur="onBlur" 
				@keydown.esc="onEscape"
				@keydown.down="onDownKey"
				@keydown.up="onUpKey"
				@keydown.enter="onEnterKey"
				v-model="search">
				<span class="typehead__text" ref="text">{{displayText}}</span>
				<ul v-if="open" class="typehead__list">
					<li class="typehead__item" v-for="(option, index) in filteredOptions" :key="index">
						<a :class="[selectIndex === index? 'typehead__active':'']" class="typehead__link" @mousedown.prevent="select(option)">{{option.text}}</a>
					</li>
				</ul>
			</div>
		</div>
	<!-- </div> -->
</template>

<script type="text/javascript">
	
	export default{
		props: {
			options:{
				type: Array,
				default(){
					return []
				}
			},
				value:{
					type:[String, Number],
					default: null
				}
		},
		data(){
			return {
				selectIndex:0,
				open: false,
				displayText: '',
				search: ''
			}
		},
		computed: {
			typeheadState(){
				return this.open?'typehead typehead__open': 'typehead'
			},
			filteredOptions(){
				const exp = new RegExp(this.search, 'i')
				return this.options.filter((option)=>{
					return (exp.test(option.id) || exp.test(option.text))
				})
			}
		},
		methods:{
			select(option){
				this.displayText = option.text
				this.$emit('input',(option.id))
				this.$refs.search.blur()
			},
			toggle(e){
				if (e.target === this.$refs.toggle ||
					e.target === this.$refs.search ||
					e.target === this.$refs.text) {
					if (this.open) {
						if (e.target !== this.$refs.search &&
							e.target !== this.$refs.text) {
						this.$refs.search.blur()
						}
					}else{
						this.$refs.search.focus()
					}
				}
			},
			onFocus(){
				this.open = true
			},
			onBlur(){
				this.search =''
				this.open = false
			},
			onEscape(){
				this.$refs.search.blur()
			},
			onUpKey(){
				if (this.selectIndex > 0) {
					this.selectIndex --
				}
			},
			onDownKey(){
				if (this.filteredOptions.length -1 > this.selectIndex) {
					this.selectIndex ++
				}
			},
			onEnterKey(){
				const option = this.filteredOptions[this.selectIndex]
				if (option) {
					this.select(option)
				}
			}
		}
	}
</script>


<style type="text/css">
	.typehead{
		border-radius:3px;
		border: 1px solid #ccc;
		position: relative;
		z-index:1;
		width: 100%;
		font-size:14px;
	}
	.typehead__open{
		border:1px solid #41B881;
	}
	.typehead__open .typehead__text{
		color:#999;
		opacity: 0.4;
	}
	.typehead__active{
		background:#41B883;
		color: #fff;
	}
	.typehead__toggle{
		position:relative;
		z-index:1;
		width:100%;

	}
	.typehead__search{
		position:absolute;
		top:0;
		left:0;
		line-height:1em;
		font-size:1em;
		padding:10px;
		width:100%;
		display:block;
		cursor: text;
		background:transparent;
		border:none;
		outline:none;
		z-index:2;
	}
	.typehead__text{
		min-height:36px;
		font-size:1em;
		line-height:1em;
		padding:10px;
		display:inline-block;
		position:relative;
	}
	.typehead__list{
		margin:0;
		padding:0;

	}
	.typehead__item{
		display:block;
		border-top:1px solid #f4f4f4;
	}
	.typehead_link{
		display:block;
		padding:10px;
		line-height:1em;
		font-size:1em;
		cursor:pointer;

	}
</style>


 -->