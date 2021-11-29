<template>
  <modal
    name="register"
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
      <div class="col form-image d-none d-sm-block"></div>
      <div class="form-wrapper col-10 col-sm-6 d-flex flex-column">
        <form class="form p-3 flex-fill">
          <div class="mb-3 field">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" v-model="user.name" id="name" aria-describedby="nameHelp" ref="name" />
            <form-validation-errors-component :field="name" :errors="validationErrors.name" v-if="validationErrors.name" />
          </div>
          <div class="mb-3 field">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" v-model="user.email" id="email" aria-describedby="emailHelp" />
            <form-validation-errors-component :field="email" :errors="validationErrors.email" v-if="validationErrors.email" />
          </div>
          <div class="mb-3 field">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" v-model="user.password" id="password" />
            <form-validation-errors-component :field="password" :errors="validationErrors.password" v-if="validationErrors.password" />
          </div>
          <div class="mb-3 field">
            <label for="password-confirm" class="form-label">Password Confirm</label>
            <input type="password" name="password_confirmation" class="form-control" v-model="user.password_confirmation" id="password-confirm" />
            <form-validation-errors-component :field="passwordConfirm" :errors="validationErrors.passwordConfirm" v-if="validationErrors.passwordConfirm" />
          </div>
          <button type="submit" @click.prevent="register(user)" class="btn btn-outline-success w-100">
            Sign Up
          </button>
        </form>
        <div class="form-footer col pb-3 d-flex justify-content-center align-items-baseline" ref="login">
          <span>Already have an account?</span>
          <router-link :to="{ name: 'login' }" @click.prevent="closeRegister" class="link ml-2">
            <span class="">Sign In</span>
          </router-link>
        </div>
      </div>
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
        name: "",
        email: "",
        password: "",
        password_confirmation: ""
      },
      name: "name",
      email: "email",
      password: "password",
      passwordConfirm: "passwordConfirm",
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
      register: "auth/registerUser",
      clearValidationErrors: "auth/clearValidationErrors"
    }),
    opened() {
      this.$refs.name.focus();
    },
    closeRegister(event) {
      this.$modal.hide("register");
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
    }
  },
  mounted() {
    this.$modal.show("register");
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
.vm--overlay[data-modal="register"] {
  background: rgba(0, 0, 0, 0.8);
  // background-image: url("/images/bg-image-15.jpg");
  // filter: blur(5px);
  // background-position: center;
  // background-repeat: no-repeat;
  // background-size: cover;
}
</style>
