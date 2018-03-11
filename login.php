<?php include('top.inc'); ?>

    <main role="main">
      <div class="text-center album py-5 bg-light">
        <div class="container col-3">
         <form class="form-signin">
              <img class="mb-5" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
              <label for="inputEmail" class="sr-only">ID</label>
              <input type="text" id="inputId" class="form-control mb-1" placeholder="ID" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
              <button class="btn btn-lg btn-secondary btn-block" type="button">Join</button>
          </form>
        </div>
      </div>
    </main>

<?php include('bottom.inc'); ?>