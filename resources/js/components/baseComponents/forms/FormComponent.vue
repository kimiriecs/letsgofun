<template>
  <form data-aos="zoom-out-up" data-aos-anchor-placement="center-center">

    <div class="form-group">
      <label for="name">Book Name</label>
      <input type="text" class="form-control" id="name" name="name" />
    </div>

    <div class="form-group">
      <label for="description">Book Descrption</label>
      <input type="text" class="form-control" id="description" name="description" />
    </div>

    <button type="submit" class="btn btn-primary">Store</button>

  </form>
</template>

<script>
// import AOS from 'aos'
AOS.init({
  offset: 200,
  duration: 900,
  easing: 'ease-in-out-back',
  delay: 100,
})
export default {
  // props: ["inputs", "buttons"]
};
</script>

<style></style>
