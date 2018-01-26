<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>UPS CELLAR</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

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
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>UPS CELLAR</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->

                    <!-- settings end -->
                    <!-- inbox dropdown start-->

                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
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

              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>

                  <h5 class="centered">USER NAME</h5>

                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="menu.html">
                          <i class="fa fa-desktop"></i>

                          <span>Menu</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Order</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="orderForm.php">Place An Order</a></li>
                          <li><a  href="viewOrder.php">View Your Order</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Customer's Orders</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="aboutUs.php" >
                          <i class="fa fa-tasks"></i>
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
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                    <form action="viewOrder.php" method="post">
                      Name on Order:<br>
                      <input type="text" name="f_name" value= "<?php echo $_GET['fname'] ?>" pattern="^[A-Za-z ]{1,20}$" required> <br>
                      StudentID:<br>
                      <input type="text" name="studentID" value="<?php echo $_GET['studentID']?>" pattern="^[0-9 ]{10}$" required><br>
                      Date of the order:<br>
                      <input type="text" name="orderDate" value="<?php echo $_GET['orderDate']?>" pattern="^\d{2}/\d{2}/\d{4}$" required><br>
                      Time of the order:<br>
                      <input type="text" name="orderTime" value="<?php echo $_GET['orderTime']?>" pattern="^\d{2}:\d{2}$" required><br>
                      <br>
                      <input type="hidden" name="oldStudentID" value="<?php echo $_GET['studentID']?>"<br>
                      <input type="submit" value="Submit">
                    </form>
        <form>
         <?php

          //path to the SQLite database file
          $db_file = 'cellar.db';

          try {
            //open connection to the airport database file
            $db = new PDO('sqlite:' . $db_file);

            //set errormode to use exceptions
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Make all the queries looking for all items of the same type (Q)
            $classicPizzasQ = "select * from menu where itemType = 'Classic Pizza';";
            $specPizzaQ = "select * from menu where itemType = 'Specialty Pizza';";
            $dipSauceQ = "select * from menu where itemType = 'Dipping Sauces';";
            $EandSQ = "select * from menu where itemType = 'Entrees and Sides';";
            $BYOPQ = "select * from menu where itemType = 'BYOP';";
            $saucesQ = "select * from toppings where itemType =  'Sauces';";
            $cheesesQ = "select * from toppings where itemType = 'Cheeses';";
            $veggiesQ = "select * from toppings where itemType =  'Veggies';";
            $meatsQ = "select * from toppings where itemType =  'Meats';";
            $freshQ = "select * from toppings where itemType =   'Fresh Toppings';";
            $subsQ = "select * from menu where itemType = 'Subs';";

            //Each query puts result into a set (S)
            $classicPizzasS = $db->query($classicPizzasQ);
            $specPizzaS = $db->query($specPizzaQ);
            $dipSauceS =  $db->query($dipSauceQ);
            $EandSS = $db->query($EandSQ);
            $BYOPS =  $db->query($BYOPQ);
            $saucesS =  $db->query($saucesQ);
            $cheesesS =  $db->query($cheesesQ);
            $veggiesS =  $db->query($veggiesQ);
            $meatsS = $db->query($meatsQ);
            $freshS = $db->query($freshQ);
            $subsS =  $db->query($subsQ);




            $edit="edit";

            //Print each set with a Header and all the items within it. Basically print all the items appropiate to each header
            echo "<h1 style=\"font-size:300%;\"> Classic Pizzas</h1>";
            foreach($classicPizzasS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"> <font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
              ";
            }


            echo "<h1 style=\"font-size:300%;\"> Specialty Pizzas </h1>";
            foreach($specPizzaS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"> <font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
              ";
            }


            echo "<h1 style=\"font-size:300%;\"> Dipping Sauces </h1>";
            foreach($dipSauceS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"><font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
              ";
            }


            echo "<h1 style=\"font-size:300%;\"> Entrees and Sides </h1>";
            foreach($EandSS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"> <font size=\"3\" face = \"Ruda\" color=\"black\">$tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
              ";
            }

            echo "<h1 style=\"font-size:300%;\"> Build Your Own </h1>";
            foreach($BYOPS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"> <font size=\"3\" face = \"Ruda\" color=\"black\">$tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
              ";
            }

            echo "<h1 style=\"font-size:300%;\"> Sauces </h1>";
            foreach($saucesS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"><font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
              ";
            }

            echo "<h1 style=\"font-size:300%;\"> Cheeses </h1>";
            foreach($cheesesS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"> <font size=\"3\" face = \"Ruda\" color=\"black\">$tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </font>
              ";
            }

            echo "<h1 style=\"font-size:300%;\"> Veggies </h1>";
            foreach($veggiesS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"> <font size=\"3\" face = \"Ruda\" color=\"black\">$tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </font>
              ";
            }

            echo "<h1 style=\"font-size:300%;\"> Meats </h1>";
            foreach($meatsS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"><font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
              ";
            }

            echo "<h1 style=\"font-size:300%;\"> Fresh Toppings </h1>";
            foreach($freshS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"><font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </font>
              ";
            }

            echo "<h1 style=\"font-size:300%;\"> Subs </h1>";
            foreach($subsS as $tuple)
            {
              echo "
                  <input type=\"checkbox\" name=\"order\" value=\"$tuple[itemName]\"> <font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName] $tuple[size] $tuple[price]    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </font>
              ";
            }




            //Disconnected from database
            $db = null;
        }
        catch(PDOException $e)
        {
            die('Exception : '.$e->getMessage());
        }

        ?>
      </form>

        </div>
      </div>
      </section>
      </section>









      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->


                        <!-- CALENDAR-->
                    <!-- / calendar -->




</section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>



    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>



	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


  </body>
</html>
