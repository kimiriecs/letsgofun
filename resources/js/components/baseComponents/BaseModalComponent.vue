<template>
  <div>
    <modal
      name="modal"
      :reset="true"
      @opened="opened"
      @before-close="beforeClose"
      :focusTrap="true"
      :scrollable="true"
      :adaptive="true"
      height="auto"
      :maxWidth="900"
      :styles="modal"
    >
      <slot></slot>
      <!-- <component :is="component"></component> -->
    </modal>
  </div>
</template>

<script>
// import FormValidationErrorsComponent from "@/components/partials/forms/FormValidationErrorsComponent.vue";
import { mapState, mapGetters, mapActions } from "vuex";
export default {
  components: {
    // FormValidationErrorsComponent
  },
  props: ['component'],
  data() {
    return {
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
      // validationErrors: "order/validationErrors"
    })
  },
  methods: {
    ...mapActions({
      create: "order/createOrder",
      // clearValidationErrors: "order/clearValidationErrors"
    }),
    opened() {
      // this.$refs.orderName.focus();
    },
    closeOrder(event) {
      this.$modal.hide("modal");
    },
    beforeClose(event) {
      // if (this.validationErrors) {
      //   this.clearValidationErrors();
      // }
      this.$router.go(-1);
    }
  },
  mounted() {
    this.$modal.show("modal");
  }
};
</script>

<style lang="scss" scoped>

</style>

<style lang="scss">   //=== Modal overlay styles ===//
  .vm--overlay[data-modal="modal"] {
    background: rgba(0, 0, 0, 0.8);
  }
  .vm--overlay[data-modal="someModal"],
  .vm--overlay[data-modal="someOtherModal"] {
    background-image: url("/images/bg-image-15.jpg");
    filter: blur(5px);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
