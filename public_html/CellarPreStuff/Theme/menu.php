<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>UPS CELLAR - Menu</title>
    <link rel="shortcut icon" href="assets/img/icon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />

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

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Close Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>" class="logo"><b>UPS CELLAR</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></p>

                  <h5 class="centered"><?php echo $_GET['fname'] ?></h5>

                  <li class="mt">
                      <a href="index.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;">
                            <i class="fa fa-list-alt"></i>
                          <span>Menu</span>
                      </a>
                      <ul class="sub">
                        <li><a class="active" href="menu.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>">View Menu</a></li>
                        <li><a  href="searchMenu.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>">Search Menu</a></li>
                      </ul>
                  </li>
                <?php if($_GET['admin']=="False") {?>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-pencil-square-o"></i>
                          <span>Order</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="orderForm.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>">Place An Order</a></li>
                          <li><a  href="viewOrder.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>">View Your Order</a></li>
                      </ul>
                  </li>
                  <?php
                  }
                  ?>

                  <?php if($_GET['admin']=="True") {?>
                  <li class="sub-menu">
                      <a href="updates.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>" >
                          <i class="fa fa-edit"></i>
                          <span>Updates Menu</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="customerOrder.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>" >
                          <i class="fa fa-book"></i>
                          <span>Customer's Orders</span>
                      </a>
                  </li>
                  <?php
                  }
                  ?>

                  <li class="sub-menu">
                      <a href="aboutUs.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>" >
                          <i class="fa fa-info-circle"></i>
                          <span>About Us</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->


  <section id="main-content">
    <section class="wrapper_menu">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <img src="assets/img/page_1.jpg" alt="" class="img-responsive"/>
          <img src="assets/img/page_2.jpg" alt="" class="img-responsive"/>
          <img src="assets/img/page_3.jpg" alt="" class="img-responsive"/>
          <img src="assets/img/page_4.jpg" alt="" class="img-responsive"/>
        </div>
      </div>
    </section>
  </section>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	  <script src="assets/js/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
  	<script src="assets/js/calendar-conf-events.js"></script>

    <script>
        //custom select box
        $(function(){
            $("select.styled").customSelect();
        });

    </script>

  </body>
</html>
