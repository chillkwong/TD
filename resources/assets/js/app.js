
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');


import Vue from 'vue'
import App from './App.vue'
import router from './router'
import ActiveTab from './helpers/session'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#root',
    components: {App},
    template: `<app></app>`,
    router
});

const header = new Vue({
    el: '#header',
    data(){
    	return{
    		activeTab: this.$route.fullPath.slice(4),
            partialUrl: this.$route.fullPath.slice(3),            
    	}
    },
    // components: {App},
    // template: `<app></app>`,
    router
});

// const diamondViewer = new Vue({
//     el: '#diamondViewer'
// });
