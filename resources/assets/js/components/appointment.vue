<template>
	<div class="modal" :class="{'is-active': appointActive} ">
  <div class="modal-background" @click="$emit('active',null)"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">{{appTitle}}</p>
      <button class="delete" aria-label="close" @click="$emit('active', null)"></button>
    </header>
    <section class="modal-card-body">
      <table class="table">
        
      </table>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Save changes</button>
      <button class="button" @click="$emit('active', null)">Cancel</button>
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
      appointActive: false,
      appTitle: '',
      columns:''
		},
		
	}
</script>