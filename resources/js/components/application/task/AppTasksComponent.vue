<template>
  <div class="row justify-content-around">
    <h1>Tasks Page</h1>
    <!-- <task-card-component v-for="task in tasks" :key="task.id" :task="task" :user="user" /> -->
  </div>
</template>

<script>
// import TaskCardComponent from '../task/TaskCardComponent.vue'
import { mapState, mapGetters, mapActions } from 'vuex'
export default {
  components: {
    // TaskCardComponent
  },
  computed: {
    ...mapState('root', {

    }),
    ...mapState('currentUser', {
      user: 'user',
    }),
    ...mapGetters({
      // orders: 'order/getUserOrders',
    }),
  },
  methods: {
    ...mapActions({
      getUser: 'currentUser/getUser',
      getUserId: 'order/getUserId',
    }),
  }
};
</script>

<style lang="scss" scoped>

</style>