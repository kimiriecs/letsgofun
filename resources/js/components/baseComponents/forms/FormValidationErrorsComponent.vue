<template>
  <!-- <div> -->
  <div v-if="validationErrors">
    <ul class="errorText">
    <!-- <ul class="alert alert-danger"> -->
      <li v-for="(value, key) in validationErrors" :key="key">
        <small>упс! что-то пошло не так!!! {{ value }}</small>
      </li>
      <!-- <li v-for="(value, key) in validationErrors" :key="key">
        <small>упс! что-то пошло не так!!! {{ value }}</small>
      </li> -->
    </ul>
  </div>
</template>

<script>
export default {
  props: ['errors', 'field'],
  data() {
    return {

    }
  },
  computed: {
    validationErrors: {
      get() {
        let errors = Object.values(this.errors);
        errors = errors.flat();
        // let errors = this.errors
        // let field = this.field
        return errors;
      }
    }
  }
};
</script>

<style lang="scss" scoped>

.errorText {
  list-style: none;
  color: rgb(233, 148, 148);
}

</style>
