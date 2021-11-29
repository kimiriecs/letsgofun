import Vue from "vue";
import Vuex from "vuex";
// import VueRouter from "vue-router"

import root from "./modules/root";
import auth from "./modules/auth";
import currentUser from "./modules/currentUser";
import order from "./modules/order";
import book from "./modules/book";

Vue.use(Vuex);
// Vue.use(VueRouter);

// export default new Vuex.Store({ //! this don't works ??? why

const store = new Vuex.Store({
  state: () => ({ }),
  getters: {},
  actions: {},
  mutations: {},
  modules: {
    root,
    auth,
    currentUser,
    order,
    book,
  }
});

export default store
