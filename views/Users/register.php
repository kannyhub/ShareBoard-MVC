<div class="container">
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="mb-3">
      <label for="nameInput" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputName" name="name" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary" name="register">Submit</button>
  </form>
</div>