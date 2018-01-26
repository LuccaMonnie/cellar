<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>UPS CELLAR - New Account</title>
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

		      <form class="form-login" action="createCust.php" method="POST">
		        <h2 class="form-login-heading">Make an Account now</h2>
		        <div class="login-wrap">
              <span class="error" style="color:red">* required field.</span><br>
              <br>Student ID:
              <span class="error" style="color:red">*</span><br>
              <input type="text" class="form-control" name = "id" pattern="^[0-9 ]{10}$" placeholder="10-digit Student ID" autofocus required>
              <br>First name:<br>
              <input type="text" class="form-control" name = "f_name" pattern="^[a-zA-Z ]{1,20}$" placeholder="First Name" autofocus>
              <br>Last name:<br>
              <input type="text" class="form-control" name = "l_name" pattern="^[a-zA-Z ]{1,20}$" placeholder="Last Name" autofocus>
              <br>Check if you are an Employee
              <input type="checkbox" class="form-control" name = "role" style="width:20px;height:20px" value="Employee" autofocus>
              <br>

		        <!-- <input type="password" class="form-control" placeholder="Password">-->

		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN and Create Account</button>

                <hr>


		        </div>



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
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>

</html>
