<?php include('./php/db.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/sstyle.css">

    <title>ACCOMMODATION SERVICE PROVIDER</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('./images/estate2.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container ">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>ACCOMMODATION SERVICE PROVIDER</strong></h3>
            <p class="mb-4">Kindly fill in the form to get started</p>
            <form action="signup.php" method="post">
            <?php include('./php/errors.php'); ?> 
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" id="username">
              </div>
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" id="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password_1">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Confirm password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password_2">
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary mb-1" name="reg_user">
              Already a member? <a href="login.php">Sign in</a>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>