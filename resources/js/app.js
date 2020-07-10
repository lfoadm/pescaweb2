/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import vuetify from './plugins/vuetify' // path to vuetify export

new Vue({
  vuetify,
}).$mount('#app')


/* window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'


Vue.use(Vuetify)
 */




// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('AppHome', require('./components/AppHome.vue').default);
import router from './Router/router.js'


const app = new Vue({
    el: '#app',
    router
});
