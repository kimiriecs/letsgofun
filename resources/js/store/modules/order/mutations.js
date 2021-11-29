const mutations = {
  setUserOrders(state, data) {
    state.userOrders = data;
  },
  // setSingleOrder(state, data) {
  //   state.singleOrder = data;
  // },
  setValidationErrors(state, data) {
    state.validationErrors = data;
  },
}

export default mutations