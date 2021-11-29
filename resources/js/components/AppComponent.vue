<template>
  <div v-cloak id="app" class="container-fluid">
    <div class="navigation fixed-top">
      <navigation-component />
    </div>
    <div class="body">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
// import NavigationComponent from '@/components/basecomponents/NavigationComponent'

import { mapState, mapGetters, mapActions } from 'vuex';

export default {
  components: {
    // NavigationComponent
  },
};
</script>

<style lang="scss" scoped>
.navigation {
  z-index: 990;
}
</style>
