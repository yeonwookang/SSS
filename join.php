<?php include('top.inc');?>
<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Join form</h2>
        <p class="lead"></p>
      </div>


      <div class="container row">
        <div class="col-md">
          <h4 class="mb-3">User Information</h4>
          <form class="join" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">ID</label>
                <input type="text" class="form-control" id="firstName" placeholder="ID" value="" required>
                <div class="invalid-feedback">
                  Valid ID is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Password</label>
                <input type="text" class="form-control" id="firstName" placeholder="******" value="" required>
                <div class="invalid-feedback">
                  Valid Password is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Password Check</label>
                <input type="text" class="form-control" id="firstName" placeholder="******" value="" required>
                <div class="invalid-feedback">
                  Password is incorrect.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
              <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="mb-4 text-center">
              <button class="btn btn-primary btn-lg" type="submit">Join</button>
              <button class="btn btn-primary btn-lg" type="submit">Back</button>
            </div>
          </form>
        </div>
      </div>
    </div>

<?php include('bottom.inc');?>