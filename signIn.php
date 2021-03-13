<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">

      <div class="">
        <?php include ('constantPHPs/header.php') ?>
      </div>

      <div class="row">
				<div class="col-md-4 justify-content-center form-div">
				<form action="api/login.php" method="post">

					<h3 class="text-centre">Sign In</h3>

					<div class="alert alert-danger">
						<li>Username required</li>
            <li>Password required</li>
					</div>
					<div class="form-group">
						<label for="username" >Username or Email</label>
						<input type="text" name="username" class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<label for="password" >Password</label>
						<input type="password" name="password" class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Sign in</button>
					</div>

					<p class="text-centre">Forgot your account details? <a href="#">Reset them here</a></p>
				</form>

<!--				<form action="login.php" method="get">
					<div class="form-group">
						<button type="submit" name="logout" class="btn btn-primary btn-block btn-lg">Sign out</button>
					</div>
				</form>
-->

				</div>
			</div>

      <div class="footer">
        <?php include ('constantPHPs/footer.php') ?>
      </div>

    </div>
    <script src="js/functions.js" type="text/javascript"></script>

  </body>
</html>
