<template>
	<div>
	<router-view class="view one" name="header"></router-view>
	<router-view></router-view>
	<router-view class="view three" name="footer"></router-view>
	</div>
</template>


<script type="text/javascript">

	export default {
		data(){
			return {
				locales: [ 'en', 'hk', 'cn' ],
				changedLocales: 'en',
			}
		},
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