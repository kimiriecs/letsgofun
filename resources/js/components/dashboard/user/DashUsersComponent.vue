<template>
  <div class="container-fluid">
    <div class="container">
      <div class="row justify-content-around">
        <!-- <order-card-component v-for="order in orders" :key="order.id" :order="order" :user="user" /> -->
      </div>
    </div>
  </div>
</template>

<script>
// import OrderCardComponent from "../order/OrderCardComponent.vue";
import { mapState, mapGetters, mapActions } from 'vuex';
export default {
  components: {
    // OrderCardComponent
  },
  computed: {
    ...mapState('root', {
      appName: 'appName',
    }),
    ...mapState('currentUser', {
      user: 'user',
    }),
    ...mapGetters({
      orders: 'order/getUserOrders',
    }),
  },
  methods: {
    ...mapActions({
      getUser: 'currentUser/getUser',
      getUserId: 'order/getUserId',
      getUserFromGetter: 'order/getUserFromGetter',
      logout: 'auth/logoutUser',
    }),
  },
  created() {
    if (localStorage.hasOwnProperty("accessToken")) {
      axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem("accessToken");
        this.getUser()
          .then(this.getUserId())
    } else {
      window.location.replace("/");
    }
  },
};
</script>
