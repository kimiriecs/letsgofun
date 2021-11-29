<template>
  <modal
    name="appOrderShow"
    height="auto"
    :maxWidth="900"
    :reset="true"
    :focusTrap="true"
    :scrollable="true"
    :adaptive="true"
    :styles="modal"
    @opened="opened"
    @before-close="beforeClose"
  >
    <div class="row no-gutters justify-content-center">
      <div class="form-wrapper col-10 col-sm-6 d-flex flex-column">
        <form class="form p-3 flex-fill">
          <input type="hidden" name="_method" value="PUT" />
          <div class="mt-3 mb-3 field">
            <label for="orderName" class="form-label">Order name</label>
            <input type="text" class="form-control" v-model="order.name" id="orderName" ref="orderName" />
            <!-- <form-validation-errors-component :field="orderName" :errors="validationErrors.orderName" v-if="validationErrors.orderName" /> -->
          </div>
          <div class="mt-3 mb-3 field">
            <label for="orderDigit" class="form-label">Order digit</label>
            <input type="text" class="form-control" v-model="order.digit" id="orderDigit" ref="orderDigit" />
            <!-- <form-validation-errors-component :field="orderDigit" :errors="validationErrors.orderDigit" v-if="validationErrors.orderDigit" /> -->
          </div>
          <div class="mt-3 mb-3 field">
            <label for="orderDescription" class="form-label">Order description</label>
            <textarea type="textarea" class="form-control" v-model="order.description" id="orderDescription" ref="orderDescription" />
            <!-- <form-validation-errors-component :field="orderDescription" :errors="validationErrors.orderDescription" v-if="validationErrors.orderDescription" /> -->
          </div>
          <div class="mt-3 mb-3 field">
            <label for="orderStatus" class="form-label">Order Status</label>
            <select class="form-select" v-model="order.status_id" id="orderStatus" ref="orderStatus" aria-label="orderStatus">
              <option value="1">acting</option>
              <option value="2">suspended</option>
              <option value="3">closed</option>
            </select>
            <!-- <form-validation-errors-component :field="orderDescription" :errors="validationErrors.orderDescription" v-if="validationErrors.orderDescription" /> -->
          </div>
          <div class="d-grid mx-auto">
            <button type="submit" @click.prevent="updateOrder({ order, id })" class="btn btn-outline-success w-100">
              Save
            </button>
          </div>
        </form>
      </div>
      <div class="col form-image d-none d-sm-block"></div>
    </div>
  </modal>
</template>

<script>
// import BaseModalComponent from "@/components/baseComponents/BaseModalComponent";
// import FormValidationErrorsComponent from "@/components/partials/forms/FormValidationErrorsComponent.vue";
import { mapState, mapGetters, mapActions } from "vuex";
export default {
  components: {
    // BaseModalComponent,
    // FormValidationErrorsComponent
  },
  props: {
    id: Number,
    initialOrderData: Object,
  },
  data() {
    return {
      order: {
        name: this.initialOrderData.name,
        digit: this.initialOrderData.digit,
        description: this.initialOrderData.description,
        status_id: this.initialOrderData.order_status_id
      },
      modal: {
        borderRadius: "0px",
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
      updateOrder: "order/updateOrder"
      // clearValidationErrors: "order/clearValidationErrors"
    }),
    opened() {
      this.$refs.orderName.focus();
    },
    closeOrder(event) {
      this.$modal.hide("appOrderShow");
    },
    beforeClose(event) {
      // if (this.validationErrors) {
      //   this.clearValidationErrors();
      // }
      this.$router.push({ name: "appOrders" });
    }
  },
  mounted() {
    this.$modal.show("appOrderShow")
  },
};
</script>

<style lang="scss" scoped>
.field {
  min-height: 95px;
}
</style>

<style lang="scss">
//=== Modal overlay styles ===//
.vm--overlay[data-modal="appOrderShow"] {
  background: rgba(0, 0, 0, 0.6);
  // background-image: url("/images/bg-image-15.jpg");
  // filter: blur(5px);
  // background-position: center;
  // background-repeat: no-repeat;
  // background-size: cover;
}
.form-select {
  display: block;
  width: 100%;
  padding: 0.375rem 2.25rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  // background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e);
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
</style>
