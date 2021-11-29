<template>
  <div class="checkboxes">

    <!-- default -->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
      <label class="form-check-label" for="flexRadioDefault1">
        Default radio
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
      <label class="form-check-label" for="flexRadioDefault2">
        Default checked radio
      </label>
    </div>

    <!-- disabled -->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled />
      <label class="form-check-label" for="flexRadioDisabled">
        Disabled radio
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled />
      <label class="form-check-label" for="flexRadioCheckedDisabled">
        Disabled checked radio
      </label>
    </div>

    <!-- inline -->
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
      <label class="form-check-label" for="inlineRadio1">1</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
      <label class="form-check-label" for="inlineRadio2">2</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled />
      <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
    </div>

    <!-- without labels -->
    <div>
      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="..." />
    </div>

    <!-- toggle buttons -->
    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked />
    <label class="btn btn-secondary" for="option1">Checked</label>

    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
    <label class="btn btn-secondary" for="option2">Radio</label>

    <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" disabled />
    <label class="btn btn-secondary" for="option3">Disabled</label>

    <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off" />
    <label class="btn btn-secondary" for="option4">Radio</label>

    <!-- Outlined styles toggle buttons -->
    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked />
    <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>

    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" />
    <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
  </div>
</template>

<script>
export default {};
</script>

<style></style>
