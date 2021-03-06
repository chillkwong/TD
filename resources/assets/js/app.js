
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

// import VideoJs from 'video.js'

import Vue from 'vue'
import App from './App.vue'
import router from './router'
// import ActiveTab from './helpers/session'

//home
import HomeIndex from './views/frontEnd/home/index'

//diamond
import DiamondViewerIndex from './views/frontEnd/diamondViewer/index'
import DiamondViewerShow from './views/frontEnd/diamondViewer/show'

//Engagement Ring
import EngagementRingIndex from './views/frontEnd/engagementRing/index'
import EngagementRingShow from './views/frontEnd/engagementRing/show'

//wedding Ring
import WeddingRingIndex from './views/frontEnd/weddingRing/index'
import WeddingRingShow from './views/frontEnd/weddingRing/show'

//wedding Ring
import CustomerJewellryIndex from './views/frontEnd/customerJewellry/index'
import CustomerJewellryShow from './views/frontEnd/customerJewellry/show'

//wedding Ring
import CustomerMomentIndex from './views/frontEnd/customerMoment/index'

//Education
import EducationIndex from './views/frontEnd/education/index'


import AboutUs from './views/frontEnd/aboutUs/index'

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
    		activeTab: this.$route.fullPath.slice(3),
            partialUrl: this.$route.fullPath.slice(3),            
    	}
    },
    router
});

if (window.location.pathname == '/' || window.location.pathname == '/en' || window.location.pathname == '/hk' || window.location.pathname == '/cn') {
    const home =  new Vue(HomeIndex);
}
 var pUrl = window.location.pathname.slice(3)
//diamond
if (pUrl == '/gia-loose-diamonds' || pUrl.includes('/gia-loose-diamonds/round-cut') || pUrl.includes('/gia-loose-diamonds/fancy-cut-diamond') || pUrl.includes('/gia-loose-diamonds/fancy-color')) {
    const diamondViewerIndex =  new Vue(DiamondViewerIndex);
}
if (!pUrl.includes('/gia-loose-diamonds/round-cut') && !pUrl.includes('/gia-loose-diamonds/fancy-cut-diamond') && !pUrl.includes('/gia-loose-diamonds/fancy-color') && window.location.pathname.slice(4,23) == 'gia-loose-diamonds/') {
    const diamondViewerShow =  new Vue(DiamondViewerShow);
}

//engagement rings
if (pUrl == '/engagement-rings' || pUrl.includes('/engagement-rings/solitaire-ring-setting') || pUrl.includes('/engagement-rings/side-stones-setting') || pUrl.includes('/engagement-rings/halo-setting')) {
    const engagementRingIndex =  new Vue(EngagementRingIndex);
}
if (!pUrl.includes('/engagement-rings/solitaire-ring-setting') && !pUrl.includes('/engagement-rings/side-stones-setting') && !pUrl.includes('/engagement-rings/halo-setting') && window.location.pathname.slice(4,21) == 'engagement-rings/') {
    const engagementRingShow =  new Vue(EngagementRingShow);
}

//wedding rings
if (pUrl == '/wedding-rings' || pUrl.includes('/wedding-rings/classic') || pUrl.includes('/wedding-rings/japanese') || pUrl.includes('/wedding-rings/vintage')) {
    const weddingRingIndex =  new Vue(WeddingRingIndex);
}
if (!pUrl.includes('/wedding-rings/classic') && !pUrl.includes('/wedding-rings/japanese') && !pUrl.includes('/wedding-rings/vintage') && window.location.pathname.slice(4,18) == 'wedding-rings/') {
    const weddingRingShow =  new Vue(WeddingRingShow);
}

//Customer share
if (pUrl.includes('/customer-jewellries') ||pUrl.includes('/engagement-tips')) {
    const customerJewellryIndex =  new Vue(CustomerJewellryIndex);
}
if (window.location.pathname.slice(4,24) == 'customer-jewellries/') {
    const customerJewellryShow =  new Vue(CustomerJewellryShow);
}

if (pUrl.includes('/customer-moments')) {
    const customerMomentIndex =  new Vue(CustomerMomentIndex);
}

//Education
if (pUrl.includes('/education-diamond-grading')) {
    const educationIndex =  new Vue(EducationIndex);
}

//buying procedure
if ( pUrl.includes('about-us') || pUrl.includes('buying-procedure')) {
    const aboutUs =  new Vue(AboutUs);
}


// const diamondViewer = new Vue({
//     el: '#diamondViewer'
// });
