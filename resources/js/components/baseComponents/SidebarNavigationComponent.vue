<template>
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left"
            type="button"
            data-toggle="collapse"
            data-target="#collapseOne"
            aria-expanded="true"
            aria-controls="collapseOne"
          >
            Dashboard
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <ul v-if="auth" class="navbar-nav flex-fill justify-content-end">
            <li class="nav-item">
              <router-link :to="{ name: 'dashboard' }" class="nav-link">Dashboard</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'dashOrders' }" class="nav-link">Orders</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'dashTasks' }" class="nav-link">Tasks</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed"
            type="button"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="false"
            aria-controls="collapseTwo"
          >
            Dashboard #2
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
                    <ul v-if="auth" class="navbar-nav flex-fill justify-content-end">
            <li class="nav-item">
              <router-link :to="{ name: 'dashboard' }" class="nav-link">Dashboard</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'dashOrders' }" class="nav-link">Orders</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'dashTasks' }" class="nav-link">Tasks</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button
            class="btn btn-link btn-block text-left collapsed"
            type="button"
            data-toggle="collapse"
            data-target="#collapseThree"
            aria-expanded="false"
            aria-controls="collapseThree"
          >
            Dashboard #3
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
                    <ul v-if="auth" class="navbar-nav flex-fill justify-content-end">
            <li class="nav-item">
              <router-link :to="{ name: 'dashboard' }" class="nav-link">Dashboard</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'dashOrders' }" class="nav-link">Orders</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'dashTasks' }" class="nav-link">Tasks</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from "vuex";
// import BaseModalComponent from "@/components/basecomponents/BaseModalComponent.vue";
export default {
  components: {
    // BaseModalComponent
  },
  computed: {
    ...mapState("root", {
      // appName: state => state.appName
      appName: "appName"
    }),
    ...mapState("auth", {
      auth: "auth"
    }),
    ...mapState("currentUser", {
      user: "user"
    })
  },
  methods: {
    ...mapActions({
      logout: "auth/logoutUser"
    })
  }
};
</script>

<style></style>
