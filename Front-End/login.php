<?php 
  
  session_start();

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Automation Web Application">
    <meta name="author" content="Tanthricat Solutions">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    
    <!-- Custom CSS for this page -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!--External CSS -->

        <!-- Switchery-->
        <link rel="stylesheet" type="text/css" href="assets/switchery/switchery.css" />

        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="Loginphp.php" id="Login_details" method="post">
        <h2 class="form-signin-heading">Sign In</h2>
        <?php 

                // when the user types something incorrext into the text boxes an error message will be dispaled 
                // telling them what they did wrong

                if (isset($_GET['error'])) {
                  
                  if ($_GET['error'] == "emptyfields") {
                    echo '<p style="color:red; font-size:20px;">Fill in all fields!</p> ';
                  }

                  else if ($_GET['error'] == "InvalidHomeID") {
                    echo '<p style="color:red; font-size:20px;">Please Enter a Correct HomeID!</p> ';
                  }

                  else if ($_GET['error'] == "sqlerror") {
                    echo '<p style="color:red; font-size:20px;">SQL Error (Systems are Currently Down)</p> ';
                  }

                  else if ($_GET['error'] == "InvalidPassword") {
                    echo '<p style="color:red; font-size:20px;">Please Enter a Valid Password</p> ';
                  }

                  else if ($_GET['error'] == "InvalidPassword2") {
                    echo '<p style="color:red; font-size:20px;">Please Enter a Valid Password2</p> ';
                  }

                  else if ($_GET['error'] == "InvalidUser") {
                    echo '<p style="color:red; font-size:20px;">Please Enter a Valid Username</p> ';
                  }
                }

                else if ($_GET['success'] == "yes") {
                    echo '<p style="color:green; font-size:20px;">Registration Successfull</p> ';
                  }
        

               ?>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Home ID" name="HomeID" id="HomeID" required="" autofocus>
            <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" required="">
            
            <button class="btn btn-lg btn-login btn-block" type="submit" id="Login" name="Login">Sign in</button>
            
            <div class="registration">
                Don't have an account yet?
                <a class="" href="registration.php">
                    Create an account
                </a>
            </div>

        </div>
      </form>

    </div>

  </body>
</html>
