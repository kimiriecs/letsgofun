const getters = {
  getUser:(state) => {
    return state.user
  },
  getUserId:(state) => {
    return state.user.id
  },
}

export default getters