<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light align-items-baseline">
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient align-items-baseline"> -->
    <router-link v-if="!auth" :to="{ name: 'welcome' }" class="navbar-brand">{{ appName }}</router-link>
    <router-link v-if="auth" :to="{ name: 'app' }" class="navbar-brand">{{ appName }}</router-link>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul v-if="!auth" class="navbar-nav flex-fill justify-content-end">
        <li class="nav-item">
          <router-link :to="{ name: 'login' }" class="nav-link">Login</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'register' }" class="nav-link">Register</router-link>
        </li>
      </ul>
      <ul v-if="auth" class="navbar-nav flex-fill justify-content-end">
        <li class="nav-item">
          <router-link :to="{ name: 'app' }" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'appOrders' }" class="nav-link">Orders</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'appTasks' }" class="nav-link">Tasks</router-link>
        </li>
        <li class="nav-item">
          <router-link :to="{ name: 'dashboard' }" class="nav-link">Dashboard</router-link>
        </li>
        <li class="nav-item dropdown d-flex position-relative">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ user.name }}
          </a>
          <img src="/images/johndoecr100x100.jpg" class="rounded-circle ml-2" style="width:50px; height:50px" alt="ava" srcset="" />
          <!-- <img src="../../../images/johndoecr100x100.jpg" class="rounded-circle ml-2" style="width:50px; height:50px" alt="ava" srcset="" /> -->
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Themes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" @click.prevent="logout">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
import { mapState, mapGetters, mapActions } from "vuex";
// import BaseModalComponent from "@/components/basecomponents/BaseModalComponent";
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
