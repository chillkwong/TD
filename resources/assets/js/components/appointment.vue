<template>
	<div class="modal" :class="{'is-active': active} ">
  <div class="modal-background" @click="$emit('active',null)"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">{{title}}</p>
      <button class="delete" aria-label="close" @click="$emit('active', null)"></button>
    </header>
    <section class="modal-card-body">
      <h1 class="title is-6">{{text.title | transJs(langs,locale) | capitalize}}</h1>
      <table class="table">
        <tr >
          <td v-for="column in columns">{{column | transJs(langs,locale) | capitalize }}</td>
        </tr>
        <tr >
          <td v-for="column in columns">{{ value[column] }}</td>
        </tr>
      </table>
      <form @submit.prevent="save">
      <input type="text" name="name" class="input" v-model="form.name" placeholder="your name" required>
      <input type="text" name="phone" class="input" v-model="form.phone" placeholder="your Phone No." required> 
      <textarea  v-model="form.remark" rows="5" cols="80"></textarea>
      <div>
        <a class="button" :href="hrefLangs + '/about-us'">{{ text.button  | transJs(langs,locale)}}</a>
      <button class="button is-success " :class="{'is-loading': processing}" @submit.stop="save" >{{text.button1 | transJs(langs,locale)}}</button>
      </div>
      </form>
    </section>

  </div>
</div>

</template>


<script type="text/javascript">

	import {post} from '../helpers/api'
  import Flash from '../helpers/flash'
  import { transJs } from '../helpers/transJs'

	export default{
		props:{
			value: {
			
				default: null
			},
      active: false,
      title: '',
      columns:'',
      processing: '',
      langs: '',
      locale: '',

		},
    data(){
      return {
          
          form: {
            name: '',
            phone: '',
            remark: 'Remark:',
            storeURL:'wwww.tingdiamond.com'+this.$route.fullPath,
          
        },
        hrefLangs: this.$route.fullPath.slice(0,3),
        text: {
        title:'Details fo Appointment',
        button: 'Contact Us',   
        button1: 'Appointment', 
        },


      }
    },
    filters: {
    capitalize: function (value) {
      if (!value) return ''
      value = value.toString()
      return value.charAt(0).toUpperCase() + value.slice(1)
      },
      transJs,
    },
    // computed: {
    //   formData(){
    //     return this.form + this.value
    //   }
    // },
    methods: {
      save(){

        var form = Object.assign({},this.form,this.value,this.storeURL)
        post('/api/appointment', form)
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
          this.active = false

      },
      
      
    }
	}
</script>