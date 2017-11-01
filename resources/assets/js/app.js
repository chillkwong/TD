
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
// import ActiveTab from './helpers/session'

//diamond
import DiamondViewerIndex from './views/frontEnd/diamondViewer/index'
import DiamondViewerShow from './views/frontEnd/diamondViewer/show'

//Engagement Ring
import EngagementRingIndex from './views/frontEnd/engagementRing/index'
import EngagementRingShow from './views/frontEnd/engagementRing/show'


import BuyingProcedure from './views/frontEnd/buyingProcedure/index'

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
    router
});

console.log(window.location.pathname.slice(4,23))
//diamond
if (window.location.pathname.slice(4) == 'gia-loose-diamonds') {
    const diamondViewerIndex =  new Vue(DiamondViewerIndex);
}
if (window.location.pathname.slice(4,23) == 'gia-loose-diamonds/') {
    const diamondViewerShow =  new Vue(DiamondViewerShow);
}

//engagement rings
if (window.location.pathname.slice(4) == 'engagement-rings') {
    const engagementRingIndex =  new Vue(EngagementRingIndex);
}

if (window.location.pathname.slice(4,21) == 'engagement-rings/') {
    const engagementRingShow =  new Vue(EngagementRingShow);
}

//buying procedure
if (window.location.pathname.slice(4) == 'buying-procedure') {
    const buyingProcedure =  new Vue(BuyingProcedure);
}


// const diamondViewer = new Vue({
//     el: '#diamondViewer'
// });
