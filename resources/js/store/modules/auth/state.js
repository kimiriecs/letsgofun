const state = {
  auth: !!localStorage.hasOwnProperty("accessToken"),
  user: {
    email: '',
    password: ''
  },
  validationErrors: ''
}

export default state