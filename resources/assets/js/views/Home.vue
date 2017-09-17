<template>
  <div>
  <p>{{trans.hello}}{{trans.diamond}}1</p>
    <router-view></router-view>

  </div>
</template>


<script type="text/javascript">

  import Vue from 'vue'
  import {get} from '../helpers/api'

	export default {
		data(){
			return {
				posts: [],
				trans: {},
        items: []
			}
		},
     watch: {
      '$route': 'fetchData'
    },
		created(){
                this.fetchData()
		},
    methods: {
          fetchData(){
                  get(`/api/home`,this.$route.fullPath.slice(1,3))
                  .then((res) =>{
                    Vue.set(this.$data,'trans', res.data.trans)
                    // this.posts = res.data.posts
                  })
                  .catch((err)=>{console.log(err)})

          }
    }
	}
</script>