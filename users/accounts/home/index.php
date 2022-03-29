<?php
include('../../../configuration/functions.php');
include('../../../configuration/logout.php');

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../../login/');
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
    <title>Home | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="../../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
  </head>
  <body>
    

    <main>
        <div class="container py-4">
          <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
              <span class="fs-4">Gerald-hub</span>
            </a>
          </header>
      
          <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
            <?php  if (isset($_SESSION['user'])) : ?>
              <h1 class="display-5 fw-bold"><?php echo $_SESSION['user']['username']; ?></h1>
              <p class="col-md-8 fs-4">Welcome to your (<?php echo ucfirst($_SESSION['user']['user_type']); ?>) account. you do not have admin access!</p>
              <a class="btn btn-primary btn-lg" href="index.php?logout='1'">Logout</a>
            <?php endif ?>
            </div>
          </div>
      
          <footer class="pt-3 mt-4 text-muted border-top">
            &copy; 2022
          </footer>
        </div>
      </main>
  </body>
</html>