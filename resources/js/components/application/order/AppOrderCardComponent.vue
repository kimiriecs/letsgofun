<template>
  <div class="col-md-4 mb-2">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <div class="title">{{ order.name }}</div>
        <div class="titleId">#{{ order.id }}</div>
      </div>
      <div class="card-body">
        <div class="orderProps" v-for="(value, name, index) in order" :key="index">
          <div class="orderProperty" v-if="name == 'digit'">
            <span class="orderKey">{{ name }}: </span>
            <span class="orderValue">{{ value }}</span>
          </div>
          <div class="orderProperty textLong" v-if="name == 'description'">
            <span class="orderKey">{{ name }}: </span>
            <span class="orderValue">{{ value }}</span>
          </div>
          <div class="orderProperty" v-if="name == 'created_at'">
            <span class="orderKey">{{ name }}: </span>
            <span class="orderValue">{{ getNewDate(value) }}</span>
          </div>
          <div class="orderProperty" v-if="name == 'status'">
            <span class="orderKey" v-if="name == 'status'">{{ name }}: </span>
            <span class="orderValue" v-if="name == 'status'">{{ value.name }}</span>
          </div>
          <div class="orderProperty" v-if="name == 'user'">
            <span class="orderKey" v-if="name == 'user'">created by: </span>
            <span class="orderValue" v-if="name == 'user'">{{ value.name }}</span>
          </div>
        </div>
      </div>
      <div class="card-footer d-flex justify-content-end">
        <button type="submit" class="btn btn-outline-success ml-3" @click.prevent="getSingleOrderAction( { orderId: order.id, routeName: 'appOrderShow' } )">
          Full Information
        <!-- <router-link :to="{ name: 'showOrder', params: { id: order.id, singleOrder: singleOrder } }">Edit</router-link> -->
        </button>
        <button type="submit" class="btn btn-outline-info ml-3" @click.prevent="getSingleOrderAction( { orderId: order.id, routeName: 'appOrderEdit' } )">
          Edit
        <!-- <router-link :to="{ name: 'editOrder', params: { id: order.id, singleOrder: singleOrder } }">Edit</router-link> -->
        </button>
        <button type="submit" class="btn btn-outline-danger ml-3" @click.prevent="deleteOrder( order.id )">
          Delete
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from "vuex";
export default {
  props: ["user", "order"],
  computed: {
    // ...mapState('currentUser', {
    //   user: 'user',
    // }),
    ...mapGetters({
      // singleOrder: "order/getSingleOrderGetter"
    })
  },
  methods: {
    ...mapActions({
      getSingleOrderAction: "order/getSingleOrderAction",
      deleteOrder: 'order/deleteOrder'
    }),

    getNewDate(dateTimstamp) {
      let date = new Date(Date.parse(dateTimstamp));
      let day = date.getDate()
      let month = date.getMonth()
      let year = date.getFullYear()
      if (month < 10) {
        month = '0' + month
      }
      let newDate = day + "." + month + "." + year;
      return newDate;
    }
  }
};
</script>

<style lang="scss" scoped>
.card {
  font-size: 18px;
  border-radius: 1rem;
}
.card-header {
  background-color: hsla(0, 0%, 11%, 0.658);
}
.card-header:first-child {
  border-radius: calc(1rem - 1px) calc(1rem - 1px) 0 0;
}
.title {
  cursor: pointer;
  color: hsla(9, 87%, 65%, 0.897);
}
.titleId {
  cursor: pointer;
  color: hsla(9, 85%, 79%, 0.897);
}
.card-body {
  background-color: hsla(0, 0%, 21%, 0.658);
  color: darkgray;
}
// .card-body:last-child {}
.card-footer {
  background-color: rgb(56, 55, 55);
  border-radius: 0 0 calc(1rem - 1px) calc(1rem - 1px);
}
.orderKey {
  color: bisque;
  cursor: pointer;
}
.orderValue {
  color: aqua;
  cursor: pointer;
}
.textLong {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
</style>
