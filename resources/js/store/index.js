import Vue from 'vue'
import Vuex from 'vuex'
import quotation from './../modules/quotation'

import VuexPersistence from 'vuex-persist'

Vue.use(Vuex)

const vuexLocal = new VuexPersistence({
  storage: window.localStorage,
  // modules: []
  modules: ['quotation']
});

export default new Vuex.Store({
  state: {
  },
  mutations: {
  },
  actions: {
  },
  modules: {
  	quotation
  },
  plugins: [vuexLocal.plugin]
})
