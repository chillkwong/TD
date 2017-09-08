<template>
	<dir>

	<Header></Header>

	<router-view></router-view>

	</dir>
</template>


<script type="text/javascript">
	import Header from './views/layouts/header.vue'
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