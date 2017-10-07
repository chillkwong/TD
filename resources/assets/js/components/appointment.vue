<template>
	<div class="modal" :class="{'is-active': appointActive} ">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modal title</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Save changes</button>
      <button class="button" @click="appointActive=!appointActive">Cancel</button>
    </footer>
  </div>
</div>

</template>


<script type="text/javascript">
	import {post} from '../helpers/api'
	export default{
		props:{
			value: {
			
				default: null
			},
      appointActive:''
		},
		
	}
</script>