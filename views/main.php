<html></!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shareboard</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand sticky-top navbar-light" style="background-color: #e3f2fd;">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">ShareBoard</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="nav navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="<?php echo ROOT_URL; ?>">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
	        </li>
	      </ul>

	      <ul class="nav navbar-nav navbar-right">
	        <li class="nav-item">
	        	<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!-- Modal -->
<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  	<form method="POST">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="mb-3">
			  <label for="title" class="form-label">Email</label>
			  <input type="email" class="form-control" id="title" name="email" placeholder="enter email" required>
			</div>
			<div class="mb-3">
			  <label for="body" class="form-label">Password</label>
			  <input type="password" class="form-control" id="password" name="password" placeholder="enter password" required>
			</div>
			<div class="mb-3 text-center">
			  <a href="<?php echo ROOT_URL; ?>users/register" class="nav-link">New User...? Please Register</a>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" name="login_user">Login</button>
	      </div>
	    </div>
	</form>
  </div>
</div>
	<div class="container-fluid">
			<?php require ($view); ?>
	</div>
</body>
</html>