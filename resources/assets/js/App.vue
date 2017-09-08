<template>
	<div>
	
	<Header></Header>

	<router-view></router-view>

	</div>
</template>


<script type="text/javascript">
	import Header from './views/layouts/header.vue'
	import Footer from  './views/layouts/footer.vue'
	export default {
		data(){
			return {
				locales: [ 'en', 'hk', 'cn' ],
				changedLocales: 'en',
			}
		},
		components: { Header},
		watch: {
			'changedLocales': 'updateLocale'
		},
		methods: {
			updateLocale(){
				Locale.setLocale(this.changedLocales)
				get()
			}
		}
	}
</script>