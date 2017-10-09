<template>
	<div class="modal" :class="{'is-active': appointActive} ">
  <div class="modal-background" @click="$emit('active',null)"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">{{appTitle}}</p>
      <button class="delete" aria-label="close" @click="$emit('active', null)"></button>
    </header>
    <section class="modal-card-body">
      <h1 class="title is-6">Details fo Appointment</h1>
      <table class="table">
        <tr >
          <td v-for="column in columns">{{column | capitalize}}</td>
        </tr>
        <tr >
          <td v-for="column in columns">{{value[column]}}</td>
        </tr>
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
    filters: {
    capitalize: function (value) {
      if (!value) return ''
      value = value.toString()
      return value.charAt(0).toUpperCase() + value.slice(1)
      }
    },
    methods: {
      save(){

        post(this.storeURL, form)
          .then((res)=>{
            if (res.data.saved) {
              Flash.setSuccess(res.data.message)
              this.$router.push(`/en/customer-jewellries/${res.data.id}`)
            }
          })
          .catch((err)=>{
            if (err.response.status === 422) {
              this.error = err.response.data
            }
          })
      },
      
      
    }
	}
</script>