<template>
	<div>
	<router-view class="view one" name="header" :images="images"></router-view>
	<router-view class="view two" name="breadcrumb"></router-view>
	<router-view></router-view>
	<router-view class="view three" name="footer"></router-view>
	</div>
</template>


<script type="text/javascript">

	import Flash from './helpers/flash'
	import Auth from './store/auth'
	import Images from './helpers/images'
	// import Locale from './helpers/locale'
  	// import {get} from './helpers/api'

	export default {
		
		created(){
			Auth.initialize()
		},
		data(){
			return {
				flash: Flash.state,
				auth: Auth.state,
				images: Images
			}
		},
	    // watch: {
	    //   'changedLocales': 'updateLocale'
	    // },
	    // methods: {
	    //   updateLocale(){
	    //     Locale.setLocale(this.changedLocales)
	    //     get()
	    //   }
	    // }
	}
</script>

<style type="text/css">
	*{
		box-sizing: border-box;
	}
</style>