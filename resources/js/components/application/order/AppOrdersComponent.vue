<template>
  <div class="row justify-contens-center">
    <div class="col-sm-12 justify-content-around align-items-center mb-5">
      <router-link :to="{ name: 'appOrderCreate' }" class="btn btn-success">Create new Order</router-link>
      <router-view></router-view>
    </div>
    <div class="col-sm-12 justify-content-around">
      <div class="row" v-if="orders.length">
        <app-order-card-component v-for="order in orders" :key="order.id" :order="order" :user="user" />
      </div>
      <div class="row" v-if="!orders.length">
        <h3>There aren't any orders yet</h3>
      </div>
    </div>
  </div>
</template>

<script>
// import AppOrderCardComponent from "@/components/application/order/AppOrderCardComponent";
// import AppOrderCreateComponent from "@/components/application/order/AppOrderCreateComponent";
import { mapState, mapGetters, mapActions } from "vuex";
export default {
  components: {
    // AppOrderCardComponent,
    // AppOrderCreateComponent
  },
  computed: {
    ...mapState("root", {}),
    ...mapState("currentUser", {
      user: "user"
    }),
    ...mapGetters({
      orders: "order/getUserOrders"
    })
  },
  methods: {
    ...mapActions({
      getUser: "currentUser/getUser",
      getUserId: "order/getUserId"
    })
  }
};
</script>

<style lang="scss" scoped></style>
