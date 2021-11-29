const mutations = {
  setAuth(state, data) {
    state.auth = data;
  },
  setValidationErrors(state, data) {
    state.validationErrors = data;
  },
}

export default mutations