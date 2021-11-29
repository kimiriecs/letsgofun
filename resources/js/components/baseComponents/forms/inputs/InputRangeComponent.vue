<template>
  <div>
    <!-- default -->
    <label for="customRange1" class="form-label">Example range</label>
    <input type="range" class="form-range" id="customRange1" />

    <!-- disabled -->
    <label for="disabledRange" class="form-label">Disabled range</label>
    <input type="range" class="form-range" id="disabledRange" disabled />

    <!-- min and max -->
    <label for="customRange2" class="form-label">Example range</label>
    <input type="range" class="form-range" min="0" max="5" id="customRange2" />

    <!-- steps -->
    <label for="customRange3" class="form-label">Example range</label>
    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3" />

  </div>
</template>

<script>
export default {};
</script>

<style></style>
