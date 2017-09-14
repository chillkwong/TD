<template>
	<div>
	<router-view class="view one" name="header" :images="images"></router-view>
	<router-view></router-view>
	<router-view class="view three" name="footer"></router-view>
	</div>
</template>


<script type="text/javascript">

	import Locale from './helpers/locale'
	import Flash from './helpers/flash'
	import Auth from './store/auth'
	import {get} from './helpers/api'
	import Images from './helpers/images'

	export default {

		created(){
			Auth.initialize()
		},
		data(){
			return {
				locales: [ 'en', 'hk', 'cn' ],
				changedLocales: 'en',
				flash: Flash.state,
				auth: Auth.state,
				images: Images
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