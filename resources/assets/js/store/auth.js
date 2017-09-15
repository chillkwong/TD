export default {
	state: {
		api_token: null,
		user_id: null,
		user_role:null

	},
	initialize(){
		this.state.api_token = localStorage.getItem('api_token')
		this.state.user_role = localStorage.getItem('user_role')
		this.state.user_id = parseInt(localStorage.getItem('user_id'))
	},
	set(api_token, user_id, user_role){
		localStorage.setItem('api_token', api_token)
		localStorage.setItem('user_id', user_id)
		localStorage.setItem('user_role', user_role)
		this.initialize()
	},
	remove(){
		localStorage.removeItem('api_token')
		localStorage.removeItem('user_id')
		localStorage.removeItem('user_role')
		this.initialize()
	}
}