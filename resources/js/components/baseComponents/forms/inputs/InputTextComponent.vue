<template>
  <div>
    <!-- default -->
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
    </div>

    <!-- sizing -->
    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example" />
    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" />
    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example" />

    <!-- disabled -->
    <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled />
    <input class="form-control" type="text" placeholder="Disabled readonly input" aria-label="Disabled input example" disabled readonly />

    <!-- readonly -->
    <input class="form-control" type="text" placeholder="Readonly input here..." aria-label="readonly input example" readonly />

    <!-- readonly plain text Block -->
    <div class="mb-3 row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com" />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" />
      </div>
    </div>

    <!-- readonly plain text Inline -->
    <form class="row g-3">
      <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Email</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com" />
      </div>
      <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Password</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="Password" />
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
      </div>
    </form>

    <!-- floating labels -->
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
      <label for="floatingPassword">Password</label>
    </div>

    <form class="form-floating">
      <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com" />
      <label for="floatingInputValue">Input with value</label>
    </form>

    <form class="form-floating">
      <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com" />
      <label for="floatingInputInvalid">Invalid input</label>
    </form>
  </div>
</template>

<script>
export default {};
</script>

<style></style>
