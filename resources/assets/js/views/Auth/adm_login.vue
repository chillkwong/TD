<template>
			<dir class="box">

			<form @submit.prevent="login">
				<dir class="is-middle"><h1><strong>Please Login!</strong></h1></dir>
				<div class="field">
				  <label class="label">Email</label>
				  <div class="control has-icons-left has-icons-right">
				    <input class="input :is-danger='error.email'" v-model="form.email" type="text" placeholder="@">
				    <!-- <input type="text" class="form__control" v-model="form.email"> -->
				    <span class="icon is-small is-left">
				      <i class="fa fa-envelope"></i>
				    </span>
				    <span class="icon is-small is-right">
				      <i class="fa fa-warning"></i>
				    </span>
				  </div>
				  <p class="help is-danger" v-if="error.email">{{error.email[0]}}</p>
				</div>
				<div class="field">
					<label class="label">Password</label>
					<div class="control">
						<input class="input :is-danger='error.password'" type="password" placeholder="password" v-model="form.password">
						<p class="help is-danger" v-if="error.password">{{error.password[0]}}</p>
					</div>
				</div>
				<div class="control">
				<button class="button is-info" :disable="isProcessing">Login</button>
				</div>
			</form>
					

			</dir>
</template>


<script type="text/javascript">
	import Flash from '../../helpers/flash'
	import Auth from '../../store/auth'
	import {post} from '../../helpers/api'
	export default {
		data(){
			return {
				form: {
					email: '',
					password: '',

				},
				error: {},
				isProcessing: false
			}
		},
		methods: {
			login(){
				this.isProcessing = true
				this.error = {}
				post(`/api/td-login`, this.form)
					.then((res) => {
						if (res.data.authenticated) {
							Auth.set(res.data.api_token, res.data.user_id, res.data.role.name)
							Flash.setSuccess('You have successfully logged in!')
							this.$router.push('/adm')
						}
						this.isProcessing = false
					})
					.catch((err)=>{
						if (err.response.status === 422) {
							this.error = err.response.data
						}
						this.isProcessing = false
					})
			}
		}
	}
</script>