<?php
        include_once 'header.php';
        ?>
    <div class="container">
        <div class="w-50 mx-auto" style="margin:100px auto;">

        <h1 class="mb-5">Please sign up</h1>

        <form>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">name</label>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">surname</label>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">username</label>
        </div>

  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

 

  <!-- Submit button -->
  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign up</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Have an account? <a href="login.php">Sign in</a></p>
  </div>
</form>

        </div>
    </div>
    
    <?php 
include_once 'footer.php'
?>
