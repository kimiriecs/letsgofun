<template>
  <div class="row mt-5 pt-5">
      <div class="col-sm-2 sidebar">
        <!-- <SidebarNavigationComponent /> -->
        <sidebar-navigation-component />
      </div>
      <div class="col main">
        <router-view></router-view>
      </div>
    </div>
</template>

<script>
// import SidebarNavigationComponent from '@/components/basecomponents/SidebarNavigationComponent'
import { mapState, mapGetters, mapActions } from 'vuex';
export default {
  components: {
    // SidebarNavigationComponent,
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

<style>

</style>