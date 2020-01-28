<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Automation Web Application">
    <meta name="author" content="Tanthricat Solutions">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">

    <!-- Custom CSS for this page -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!--External CSS -->

        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" id="Register_details" action="registerphp.php" method="post">
        <h2 class="form-signin-heading">Register Your Account</h2>
         <?php 

                // when the user types something incorrect into the text boxes an error message will be dispaled 
                // telling them what they did wrong

                if (isset($_GET['error'])) {
                  
                  if ($_GET['error'] == "emptyfields") {
                    echo '<p style="color:red; font-size:20px;">Fill in all fields!</p> ';
                  }

                  else if ($_GET['error'] == "invalidEmail") {
                    echo '<p style="color:red; font-size:20px;">Please Enter a Correct Email!</p> ';
                  }

                  else if ($_GET['error'] == "sqlerror") {
                    echo '<p style="color:red; font-size:20px;">SQL Error (Systems are Currently Down)</p> ';
                  }

                  else if ($_GET['error'] == "passsnotthesame") {
                    echo '<p style="color:red; font-size:20px;">Your Passwords do not Match!</p> ';
                  }

                  else if ($_GET['error'] == "houseidinuse") {
                    echo '<p style="color:red; font-size:20px;">House ID is already in use</p> ';
                  }

                  else if ($_GET['error'] == "invalidHouseID") {
                    echo '<p style="color:red; font-size:20px;">House ID is not valid</p> ';
                  }

                }
               ?>
        <div class="login-wrap">
            <p>Enter your personal details below:</p>
            <input type="text" class="form-control" placeholder="First Name" id="FirstName" name="FirstName" required="" autofocus>
            <input type="text" class="form-control" placeholder="Last Name" id="LastName" name="LastName" required="" autofocus>
            <input type="text" class="form-control" placeholder="Email" id="Email" name="Email" required="" autofocus>

            <p> Enter your account details below:</p>
            <input type="text" class="form-control" placeholder="Home ID (Displayed on Subscription Receipt)" id="HomeID" name="HomeID" required="" autofocus>
            <input type="password" class="form-control" placeholder="Password" id="Password1" name="Password1" required="">
            <input type="password" class="form-control" placeholder="Re-type Password" id="Password2" name="Password2" required="">
            <label class="checkbox">
                <input type="checkbox" value="agree this condition" id="ToSBox" name="ToSBox" required=""> I agree to the Terms of Service and Privacy Policy
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit" id="Register" name="Register">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="login.html">
                    Login
                </a>
            </div>

        </div>

      </form>

    </div>


  </body>
</html>
