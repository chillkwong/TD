<template>
	<div>
		<div class="modal" :class="{'is-active': flash.success}">
		  <div class="modal-background" @click="flash.success=null"></div>
		  <div class="modal-content">
		    <div class="notification is-info">
			  {{flash.success}}
			</div>
		  </div>
		  
		</div>

		<div class="modal" :class="{'is-active': flash.error}">
		  <div class="modal-background" @click="flash.error=null"></div>
		  <div class="modal-content">
		    <div class="notification is-danger">
			  {{flash.error}}
			</div>
		  </div>
		  
		</div>
	
	<div class="notification is-info" v-if="flash.error">
	  <button class="delete"></button>
	  {{flash.error}}
	</div>

	<router-view class="view one" name="header"></router-view>
	<router-view class="view two" name="breadcrumb"></router-view>
	<router-view></router-view>
	
	</div>
	
</template>


<script type="text/javascript">

	import Flash from './helpers/flash'
	import Auth from './store/auth'
	// import Images from './helpers/images'
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
				// images: Images
			}
		},

	    // watch: {
	    //   'changedLocales': 'updateLocale'
	    // },
	    // methods: {
	    //   scollToTop(){
	    //     window.scrollTo(0, 0);
	    //   }
	    // }
	}
</script>

<style type="text/css">
	*{
		box-sizing: border-box;
	}
	
</style>