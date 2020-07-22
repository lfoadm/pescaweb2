require('./bootstrap');

import Vue from 'vue'
import vuetify from './plugins/vuetify'

new Vue({
  vuetify,
}).$mount('#app')


window.Vue = require('vue');

/*
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)
 */

import User from './Helpers/User'
window.User = User


// const files = require.context('./', true, /\.vue$/i)
//files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('AppHome', require('./components/AppHome').default);
import router from './Router/router.js'


const app = new Vue({
    el: '#app',
    router
});
