<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>UPS CELLAR - Log In</title>
    <link rel="shortcut icon" href="assets/img/icon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
        <!--action="getCust.php"-->
		      <form class="form-login" action="getCust.php" method="POST">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
              <span class="error" style="color:red">* required field.</span><br>
              <br>Student ID:
              <span class="error" style="color:red">*</span><br>
		          <input type="text" class="form-control" name = "id" pattern="^[0-9 ]{10}$" placeholder="10-digit Student ID" autofocus required>
		        <!--   <br>First name:<br>
             <input type="text" class="form-control" name = "f_name" pattern="^[a-zA-Z ]{1,20}$" placeholder="First Name" autofocus>
              <br>Last name:<br>
              <input type="text" class="form-control" name = "l_name" pattern="^[a-zA-Z ]{1,20}$" placeholder="Last Name" autofocus>
              <br>-->
              <!--<div class="registration">
                <a class="" href="http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/index.php?accountId=001&fname=Guest">
                    Login in as a guest
                </a>
              </div>-->
              <br>
		        <!-- <input type="password" class="form-control" placeholder="Password">-->

              <label class="checkbox">
                <span class="pull-right">
                  <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>

                </span>
              </label>
              <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
              <!--<button class="btn btn-theme btn-block" type="submit"><i class="fa fa-user"></i> GUEST LOGIN </button>-->
              <!--href="index.php?accountId=$accID&fname=$fname&lname=$lname"-->

                <hr>

		             <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/newAccount.php">
		                    Create an account
		                </a>
		            </div>

		        </div>

		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

		      </form>
	  	</div>
	  </div>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/goodpizza.jpg", {speed: 500});
    </script>

  </body>

</html>
