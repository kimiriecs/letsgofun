import axios from 'axios'
import router from '../../../router'

const actions = {
  getUserId({ dispatch }) {
    axios
      .get('/api/v1/user/current-user')
      .then(response => {
        dispatch('getUserOrders', {id: response.data.id})
      })
      .catch(error => {
        console.log(error)
      })
  },
  getUserOrders({ commit },{id}) {
    axios
      .get(`/api/v1/user/${id}/orders`).then(response => {
        commit('setUserOrders', response.data)
      })
      .catch(error => {
        console.log(error)
      })
  },
  getSingleOrderAction({ commit }, { orderId, routeName } ) {
    console.log('getting order with Id = ', orderId, ' . . .')
    axios
      .get(`/api/v1/orders/${orderId}`)
      .then(response => {
        console.log(response.data)
        // commit('setSingleOrder', response.data)
        router.push({ name: routeName, params: { id: orderId, initialOrderData: response.data[0] } })
      })
      .catch(error => {
        console.log(error)
      })
  },
  createOrder({ dispatch, commit, rootGetters }, order) {
    axios
      .post('/api/v1/orders', {
        name: order.name,
        digit: order.digit,
        description: order.description,
        order_status_id: order.status_id,
      })
      .then(response => {
        dispatch('getUserOrders', {
          id: rootGetters[ 'currentUser/getUserId' ]
        })
        //TODO router.push(-1)
        router.push({ name: 'appOrders' })
      })
      .catch(error => {
        console.log(error)
      })
  },
  updateOrder({ dispatch, commit, rootGetters }, data ) {
    axios
      .put( `/api/v1/orders/${data.id}`,
      {
        name: data.order.name,
        digit: data.order.digit,
        description: data.order.description,
        order_status_id: data.order.status_id,
        // _method: 'put',
      })
      .then(response => {
        dispatch('getUserOrders', {
          id: rootGetters[ 'currentUser/getUserId' ]
        })
        //TODO router.push(-1)
        router.push({ name: 'appOrders' })
      })
      .catch(error => {
        console.log(error)
      })
  },
  deleteOrder({ dispatch, commit, rootGetters }, order ) {
    axios
      .delete( `/api/v1/orders/${order}` )
      .then( response => {
        dispatch('getUserOrders', {
          id: rootGetters[ 'currentUser/getUserId' ]
        })
      })
      .then( console.log('Order with Id = ', order, ' was deleted') )
      .catch( error => {
        console.log( error )
      })
  },
  clearValidationErrors ({ commit }) {
    commit('setValidationErrors', '')
  },
}

export default actions