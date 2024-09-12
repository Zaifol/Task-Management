<header class="bg-info text-white text-center py-5 bg-gradient">
        <div class="container">
            <h1>Login</h1>
            <p clas="lead">It's quick and easy</p>
        </div>
    </header>

    <section class="mt-5">
          <div class="container form-control fw-bold">
          <form method="post" action="<?php echo base_url();?>login">
              
            <div class="mt-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Please enter your full name">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Please enter your password">
                  </div>

                  <button type="submit" class="btn-primary btn">Login</button>
            </div>
</form>
          </div>

    </section>
<?php if (session()->getFlashdata('error')) { ?>
<script>
Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "<?php session()->getFlashdata('error'); ?>",
});</script>
    <?php } ?>