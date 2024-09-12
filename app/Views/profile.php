<header class="bg-info text-white text-center py-5 bg-gradient">
        <div class="container">
            <h1>Sign Up</h1>
            <p clas="lead">It's quick and easy</p>
        </div>
    </header>

    <section class="mt-5">
          <div class="container form-control fw-bold">
            <div class="mt-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" value="<?= $nama ?>" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your full name">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" value="<?= $username ?>" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your username">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" value="<?= $email ?>" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" value="<?= $password ?> "class="form-control" id="exampleFormControlInput1" placeholder="Please enter your password">
                  </div>
                  <a href="dashboard" class="btn-primary btn">Submit</a>
            </div>
          </div>

    </section>
