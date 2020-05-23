/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');

import store from './store'
require('./plugins')
Vue.config.productionTip = false


/*=============================================
=            Section comment block            =
=============================================*/

Vue.component('quotation-form', require('./components/quotation/Form.vue').default);


/*=====  End of Section comment block  ======*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
  store,
  // render: h => h(App)
}).$mount('#app')