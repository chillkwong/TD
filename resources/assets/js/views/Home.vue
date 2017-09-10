<template>
  <div>
  Home
    <router-view></router-view>
  </div>
</template>


<script type="text/javascript">

  // import Flash from '../helpers/flash'
  // import Auth from '../store/auth'
  // import {post} from '../helpers/api'

	export default {
		data(){
			return {
				posts: [],
				trans: [],
        items: []
			}
		},
		created(){
                this.fetchData()
		},
            methods: {
                        fetchData(){
                                get(`/api/posts`)
                                .then((res) =>{
                                  this.posts = res.data.posts
                                })
                        }
            }
	}
</script>