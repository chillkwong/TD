export default {
	state: {
		success: null,
		error: null
	},
	setSuccess(message){
		this.state.success = message
		setTimeout(()=>{
			this.removeSuccess()
		}, 10000)
	},
	setError(message){
		this.state.error = message
		setTimeout(()=>{
			this.removeError()
		},15000)
	},
	removeSuccess(){
		this.state.success = null
	},
	removeError(){
		this.state.error = null
	}
}