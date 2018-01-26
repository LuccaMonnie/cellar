<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>UPS CELLAR - View Order</title>
    <link rel="shortcut icon" href="assets/img/icon.ico" type="image/x-icon">

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

                  <h5 class="centered"> <?php echo $_GET['fname'] ?></h5>

                  <li class="mt">
                      <a href="index.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                            <i class="fa fa-list-alt"></i>
                          <span>Menu</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="menu.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>">View Menu</a></li>
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
          <!--join orderID with item names-->
      <section id="main-content">
        <section class="wrapper">
          <div class="row shop-tracking-status">
            <div class="col-md-12">
              <div class="well">
                <form action="viewOrder.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>" method="post">
                  <div class="form-horizontal">
                    <div class="form-group">
                      <label for="inputOrderTrackingID" class="col-sm-2 control-label">Order ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputID" value="<?php echo $_GET[inputID]?>" pattern="^[0-9 ]$" placeholder="# put your order ID here" required> <br>
                        <input type="submit" value="Get Status" class="btn btn-success">
                      </div>
                    </div>
                  </div>
                  <?php
                    //path to the SQLite database file
                    $db_file = './database4/cellar.db';
                    try {
                      //open connection to the cellar database file
                      $db = new PDO('sqlite:' . $db_file);
                      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                      // where customerID = 'accountId';
                      $accID =  $_GET['accountId'] ;
                    //  echo $accID;
                    //  $orderIDQ = "select * from OrderedItem";
                     //where customerID = $accID
                      //$orderIDQ = "select orderID,itemID from orderPlaced NATURAL JOIN OrderedItem;";
                      $orderIDQ = "select * from orderPlaced NATURAL JOIN OrderedItem NATURAL JOIN Menu;";
                  //  "select orderID from orderPlaced where customerID ='909'";// natural join OrderedItem;";
                    //  $orderUpdate = "select * from orderPlaced where customerID =".$accID. "natural join updates where orderID = Not started"  ;
                    //echo "hi";
                      $personalOrderQ = "select * from OrderPlaced NATURAL JOIN  OrderedItem NATURAL JOIN Menu where customerID = '$accID';";
                      // $personalOrderQ = "select itemName from orderPlaced where customerID = '$accID' NATURAL JOIN OrderedItem NATURAL JOIN menu;";
                    //  $personalOrderS = $db->query($personalOrderQ);
                    $price = "select sum(price) as Sum from OrderPlaced NATURAL JOIN  OrderedItem NATURAL JOIN Menu where customerID = '$accID';";

                    /*  foreach($personalOrderS as $tuple)
                      {
                        echo "$tuple[customerID] $tuple[itemID] $tuple[itemName]<br>";
                      }*/


                  //    $itemIDQ = "select * from orderedItem natural join orderPlaced natural join updates where orderID = 'inputID';";
                    //  $where = $_GET['accountId'];
                      $orderIDS =  $db->query($personalOrderQ);
                      $priceTotal =  $db->query($price);

                //      foreach($orderIDS as $tuple){

                  //  $itemIDQ = "select * from orderedItem natural join ".$tuple[0];

                  //    $itemIDS = $db->query($itemIDQ);
                  //  }
                      ?>
                      <h1 align="center">View Order</h1>
                      <table >
                      <thead>
                        <tr>
                          <th><h2>Customer ID</h2></th>
                          <th><h2>Order ID</h2></th>
                          <th><h2>Item Name</h2></th>
                          <th><h2>Size</h2></th>
                          <th><h2>Price</h2></th>
                          <th><h2>Status</h2></th>


                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      //Print each set with a Header and all the items within it. Basically print all the items appropiate to each header

                        foreach($orderIDS as $tuple)
                        {
                      ?>
                        <tr>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[customerID]</font>"; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[orderID]</font>"; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[status]</font>"; ?></td>


                        </tr>
                      <?php
                        }

                      ?>
                      <?php
                      //Print each set with a Header and all the items within it. Basically print all the items appropiate to each header

                        foreach($priceTotal as $tuple)
                        {
                      ?>
                        <tr>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> "; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> "; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> "; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> Total "; ?></td>
                          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[Sum]</font>"; ?></td>

                        </tr>
                      <?php
                        }

                      ?>

                    </table>
                    <?php


                      // echo "<br> Just messinf around";
                      //   $randomQ = "select * from OrderedItem NATURAL JOIN menu;";
                      //   $randomS =  $db->query($randomQ);
                      //   for each($randomS as $tuple)
                      //   {
                      //     echo $tuple[itemName];
                      //   }


                    //  foreach($itemIDS as $tuple) {
                    //    echo "bib";
                    //    echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[orderID] $tuple[itemID]</font>";
                    //  }
                  ?>
                <!--  <h4>Your order status:</h4>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <span class="prefix">Ordered by:</span>
                        <span class="label label-success"><?php
                            /*if (isset($_POST['status'])) {
                              foreach($orderIDS as $tuple) {
                                echo $_POST[inputID];
                                echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[orderID]</font>";
                                if ($_POST[inputID] === $tuple[orderID]) {
                                  echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[orderID]</font>";
                                //  echo "true";
                                //  echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[customerID] </font>";
                                }
                              }
                          //  echo "false";
                            }*/
                          ?></span>
                      </li>
                      <li class="list-group-item">
                        <span class="prefix">Date created:</span>
                        <span class="label label-success"><?php
                            /*if (isset($_POST['status'])) {
                              foreach($orderIDS as $tuple) {
                                if ($_POST[inputID] === $tuple[day]) {
                              //    echo "true";
                                  echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[day] </font>";
                                }
                              }
                            //  echo "false";
                            }*/
                          ?></span>
                      </li>
                      <li class="list-group-item">
                        <span class="prefix">Order details:</span>
                        <span class="label label-success"><?php
                            /*if (isset($_POST['status'])) {
                              foreach($orderIDS as $tuple) {
                                if ($_POST[inputID] === $tuple[itemID]) {
                                  //echo "true";
                                  echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemID] </font>";
                                }
                              }
                            //  echo "false";
                            }*/
                          ?></span>
                      </li>
                    </ul>-->
                  <?php
                      //Disconnected from database
                      $db = null;
                    }
                    catch(PDOException $e) {
                      die('Exception : '.$e->getMessage());
                    }
                  ?>
                </form>
                <?php if($_GET['admin']=="True") {?>
                  <form action="assets/js/timer.js" method="post">
                    <input id="time" style="width:37%;background:floralwhite;font-family:sans-serif;float:left;border:3px solid cornflowerblue;padding:5px;height:37px;border-radius:8px;outline:none;" type="Text" name="timeNeeded" placeholder="How long do you need the prepare for this order?">
                    <input type="submit" style="width:150px;height:36px;border 3px cornflowerblue;background:cornflowerblue;color:lightgrey;border-radius:5px;cursor:pointer;font-size:20px;font-color:white;" name="status"  value="Set Timer">
                  </form>
                <?php
                }
                ?>
                <div class="order-status">
                    <div class="order-status-timeline">
                      <?php
                        if (isset($_POST['status'])) {
                      ?>
                          <div class="timer" style="width:0%"></div>
                      <?php
                        }
                      ?>
                    </div>
                  <div class="image-order-status image-order-status-new active img-circle">
                      <span class="status">Accepted</span>
                      <div class="icon"></div>
                  </div>
                  <div class="image-order-status image-order-status-active active img-circle">
                      <span class="status">In progress</span>
                      <div class="icon"></div>
                  </div>
                  <div class="image-order-status image-order-status-completed active img-circle">
                      <span class="status">Completed</span>
                      <div class="icon"></div>
                  </div>
                </div>
              </div>
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
    <script src="assets/js/timer.js"></script>


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
