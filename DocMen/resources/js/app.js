require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('example-component',require('./components/ExampleComponents.vue'));
const router = new VueRouter({
    routes // short for `routes: routes`
  })


  const app = new Vue({
    router
  }).$mount('#app')