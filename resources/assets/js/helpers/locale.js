export default {
	temp:{
	currentLocale: 'en',
	lastUrl: ''
	},
	setLocale(locale){
		this.temp.currentLocale = locale
	},
	setLastUrl(url){
		this.temp.lastUrl = url
	}
}