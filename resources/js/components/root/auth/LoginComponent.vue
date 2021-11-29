<template>
  <modal
    name="login"
    height="auto"
    :maxWidth="900"
    :reset="true"
    :focusTrap="true"
    :scrollable="true"
    :adaptive="true"
    :styles="modal"
    @opened="opened"
    @before-open="beforeOpen"
    @before-close="beforeClose"
  >
    <div class="row no-gutters justify-content-center">
      <div class="form-wrapper col-10 col-sm-6 d-flex flex-column">
        <form class="form p-3 flex-fill">
          <div class="mt-3 mb-3 field">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" v-model="user.email" id="exampleInputEmail1" aria-describedby="emailHelp" ref="email" />
            <form-validation-errors-component :field="email" :errors="validationErrors.email" v-if="validationErrors.email" />
          </div>
          <div class="mb-3 field">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" v-model="user.password" id="exampleInputPassword1" />
            <form-validation-errors-component :field="password" :errors="validationErrors.password" v-if="validationErrors.password" />
          </div>
          <div class="d-grid mx-auto">
            <button type="submit" @click.prevent="login(user)" class="btn btn-outline-success w-100">
              Sign In
            </button>
          </div>
        </form>
        <div class="form-footer col pb-3 d-flex justify-content-center align-items-baseline" ref="register">
          <span class="">Don't have an account?</span>
          <router-link :to="{ name: 'register' }" @click.prevent="closeLogin" class="link ml-2">
            <span class="">Sign Up</span>
          </router-link>
        </div>
      </div>
      <div class="col form-image d-none d-sm-block"></div>
    </div>
  </modal>
</template>

<script>
// import FormValidationErrorsComponent from "@/components/basecomponents/forms/FormValidationErrorsComponent.vue";
import { mapState, mapGetters, mapActions } from "vuex";
export default {
  components: {
    // FormValidationErrorsComponent
  },
  data() {
    return {
      user: {
        email: "",
        password: ""
      },
      email: "email",
      password: "password",
      modal: {
        borderRadius: "0px",
        zIndex: "50",
        overflowY: "auto"
      }
    };
  },

  computed: {
    ...mapState({
      // user: state => state.user
    }),
    ...mapGetters({
      validationErrors: "auth/validationErrors"
    })
  },
  methods: {
    ...mapActions({
      login: "auth/loginUser",
      clearValidationErrors: "auth/clearValidationErrors"
    }),
    opened() {
      this.$refs.email.focus();
    },
    closeLogin(event) {
      this.$modal.hide("login");
    },
    beforeOpen(event) {
      if (this.validationErrors) {
        this.clearValidationErrors();
      }
    },
    beforeClose(event) {
      if (this.validationErrors) {
        this.clearValidationErrors();
      }
      this.$router.push({ name: "welcome" });
    },
  },
  mounted() {
    this.$modal.show("login");
  }
};
</script>

<style lang="scss" scoped>
.field {
  min-height: 95px;
}
.link {
  color: aquamarine;
}
.link:hover {
  color: rgb(0, 252, 168);
  text-decoration: none;
}
</style>

<style lang="scss">
//=== Modal overlay styles ===//
.vm--overlay[data-modal="login"] {
  background: rgba(0, 0, 0, 0.8);
  // background-image: url("/images/bg-image-15.jpg");
  // filter: blur(5px);
  // background-position: center;
  // background-repeat: no-repeat;
  // background-size: cover;
}
</style>
