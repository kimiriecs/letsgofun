import axios from "axios";

import {Form} from '../../utilities/form/form'
import {Errors} from '../../utilities/errors/errors'

const actions = {
  getUser({ commit }) {
    axios
      .get("/api/v1/user/current-user")
      .then(response => {
        commit("setUser", response.data)
    });
  },
}

export default actions