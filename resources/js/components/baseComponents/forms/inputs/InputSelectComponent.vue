<template>
  <div>
    <select class="form-select" aria-label="Default select example">
      <!-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> -->
      <!-- <select class="form-select form-select-sm" aria-label=".form-select-sm example"> -->
      <!-- <select class="form-select" multiple aria-label="multiple select example"> -->
      <!-- <select class="form-select" size="3" aria-label="size 3 select example"> -->
      <!-- <select class="form-select" aria-label="Disabled select example" disabled> -->
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>

    <!-- floating labels -->
    <div class="form-floating">
      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="floatingSelect">Works with selects</label>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style></style>
