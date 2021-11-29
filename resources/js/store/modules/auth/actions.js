import axios from 'axios'
import router from '../../../router'

import {Form} from '../../utilities/form/form'
import {Errors} from '../../utilities/errors/errors'

const actions = {
  registerUser({ commit }, user) {
    axios
      .post('/api/v1/user/register', {
        name: user.name,
        email: user.email,
        password: user.password,
        password_confirmation: user.password_confirmation,
      })
      .then(response => {
        if (response.data.accessToken) {
          localStorage.setItem("accessToken", response.data.accessToken)
          commit('setAuth', true)
          router.push('/app') // window.location.replace("/app");
        }
      })
      .catch(error => {
        if (error.response.status == 422){
          commit('setValidationErrors', error.response.data.errors)
        }
      });
  },
  loginUser({ dispatch, commit }, user) {
    axios
      .post('/api/v1/user/login', {
        email: user.email,
        password: user.password
      })
      .then(response => {
        if (response.data.accessToken) {
          localStorage.setItem('accessToken', response.data.accessToken)
          commit('setAuth', true)
          router.push('/app') // window.location.replace("/app");
        }
      })
      .catch(error => {
        if (error.response && error.response.status === 422){
          commit('setValidationErrors', error.response.data.errors)
        }
      });
  },
  logoutUser({ commit }) {
    if (localStorage.hasOwnProperty('accessToken')) {
      localStorage.removeItem('accessToken')
      commit('setAuth', false)
      router.push('/')
      // router.push('/login')
    }
  },
  clearValidationErrors ({ commit }) {
    commit('setValidationErrors', '')
  }
}

export default actions