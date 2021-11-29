<template>
    <div class="row mt-5 pt-5">
      <!-- <div class="col-sm-2">
        <h1>SideBar</h1>
      </div> -->
      <div class="col main">
        <router-view></router-view>
      </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex';
export default {
  components: {

  },
  computed: {
    ...mapState('root', {
      appName: 'appName',
    }),
    ...mapState('currentUser', {
      user: 'user',
    }),
    ...mapGetters({
      //...
    }),
  },
  methods: {
    ...mapActions({
      getUser: 'currentUser/getUser',
      getUserId: 'order/getUserId',
    }),
  },
  created() {
    if (localStorage.hasOwnProperty('accessToken')) {
      axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('accessToken');
        this.getUser()
          .then(this.getUserId())
    } else {
      router.push('/') // window.location.replace("/");
    }
  },
};
</script>

<style lang="scss" scoped>
// .main {
//   overflow-y: hidden;
// }
</style>
