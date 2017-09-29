export default {
	temp:{
	currentLocale: '',
	lastUrl: ''
	},
	setLocale(locale){
		this.temp.currentLocale = locale
	},
	setLastUrl(url){
		this.temp.lastUrl = url
	}
}