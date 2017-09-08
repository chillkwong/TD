import axios from 'axios'
import Auth from '../store/auth'
import Locale from '../helpers/locale'

export function get(url){
	if (!url) {
		url = Locale.temp.lastUrl
	}
	Locale.setLastUrl(url)
	return axios({
		method: 'GET',
		url: url,
		headers: {
			'Authorization' : `Bearer ${Auth.state.api_token}`,
			'X-localization' : Locale.temp.currentLocale
		}
	})
}

export function post(url, data){
	return axios({
		method: 'POST',
		url: url,
		data: data,
		headers: {
			'Authorization' : `Bearer ${Auth.state.api_token}`
		}
	})

}
