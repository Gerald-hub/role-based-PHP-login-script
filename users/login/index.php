<?php
include '../../configuration/functions.php';
include '../../configuration/login.php';

// call the register() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Account | Login</title>
    <!-- Bootstrap core CSS -->
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../assets/signin.css" rel="stylesheet">
  </head>
  <body>
    
<main class="form_styles">
  <form action="index.php" method="post">
    <div class="text-center text-danger fw-bold">
        <p><?php echo display_error(); ?></p>
    </div>
    <h3 class="h3 mb-3 fw-normal">Login</h3>
    <div class="form-floating">
      <input type="text" class="form-control" name="username" id="floatingInput" value="<?php echo $username; ?>" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login_btn">Login</button>
    <p class="text-muted mt-3" style="font-size: 11px;">Not registered? <a href="../register/">Register here</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2022 Gerald-hub open source <a href="mailto:geraldmutswi@gmail.com">Email me</a></p>
  </form>
</main>


    
  </body>
</html>
