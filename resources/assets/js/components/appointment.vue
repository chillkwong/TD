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
      <form @submit.prevent="save">
      <input type="text" name="name" class="input" v-model="form.name" placeholder="your name" required>
      <input type="text" name="phone" class="input" v-model="form.phone" placeholder="your Phone No." required> 
      <div>
      <button class="button is-success " :class="{'is-loading': isProcessing}" @submit.stop="save" >Appointment</button>
      </div>
      </form>
    </section>

  </div>
</div>

</template>


<script type="text/javascript">

	import {post} from '../helpers/api'
  import Flash from '../helpers/flash'

	export default{
		props:{
			value: {
			
				default: null
			},
      appointActive: false,
      appTitle: '',
      columns:'',
      storeURL:'',
      isProcessing: '',
		},
    data(){
      return {
          
          form: {
            name: '',
            phone: '',
          
        },

      }
    },
    filters: {
    capitalize: function (value) {
      if (!value) return ''
      value = value.toString()
      return value.charAt(0).toUpperCase() + value.slice(1)
      }
    },
    // computed: {
    //   formData(){
    //     return this.form + this.value
    //   }
    // },
    methods: {
      save(){

        var form = Object.assign({},this.form,this.value)
        post(this.storeURL, form)
          .then((res)=>{
            if (res.data.saved) {
              Flash.setSuccess(res.data.message)
              this.$emit('active', null)
            }
          })
          .catch((err)=>{
            if (err.response.status === 422) {
              this.error = err.response.data
            }
          })
          this.appointActive = false

      },
      
      
    }
	}
</script>