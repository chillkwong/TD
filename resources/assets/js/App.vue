<template>
	<div>
	<router-view class="view one" name="header" :images="images" ></router-view>
	<router-view class="view two" name="breadcrumb"></router-view>
	<router-view></router-view>
	<router-view class="view three" name="footer"></router-view>
	</div>
</template>


<script type="text/javascript">

	import Flash from './helpers/flash'
	import Auth from './store/auth'
	import Images from './helpers/images'

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
	}
</script>