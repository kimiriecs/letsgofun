<template>
  <div class="checkboxes">

    <!-- default -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
      <label class="form-check-label" for="flexCheckDefault">
        Default checkbox
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
      <label class="form-check-label" for="flexCheckChecked">
        Checked checkbox
      </label>
    </div>

    <!-- indeterminate -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" />
      <label class="form-check-label" for="flexCheckIndeterminate">
        Indeterminate checkbox
      </label>
    </div>

    <!-- disabled -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled />
      <label class="form-check-label" for="flexCheckDisabled">
        Disabled checkbox
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled />
      <label class="form-check-label" for="flexCheckCheckedDisabled">
        Disabled checked checkbox
      </label>
    </div>

    <!-- inline -->
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
      <label class="form-check-label" for="inlineCheckbox1">1</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
      <label class="form-check-label" for="inlineCheckbox2">2</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled />
      <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
    </div>

    <!-- without labels -->
    <div>
      <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." />
    </div>

    <!-- toggle buttons -->
    <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off" />
    <label class="btn btn-primary" for="btn-check">Single toggle</label>

    <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off" />
    <label class="btn btn-primary" for="btn-check-2">Checked</label>

    <input type="checkbox" class="btn-check" id="btn-check-3" autocomplete="off" disabled />
    <label class="btn btn-primary" for="btn-check-3">Disabled</label>

    <!-- Outlined styles toggle buttons -->
    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off" />
    <label class="btn btn-outline-primary" for="btn-check-outlined">Single toggle</label><br />

    <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off" />
    <label class="btn btn-outline-secondary" for="btn-check-2-outlined">Checked</label><br />
  </div>
</template>

<script>
export default {};
</script>

<style></style>
