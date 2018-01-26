<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>UPS CELLAR - Order Form</title>
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
            <a href="index.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>" class="logo"><b>UPS CELLAR</b></a>
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
                      <a href="index.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET[admin] ?>">
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
                        <li><a  href="menu.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET[admin] ?>">View Menu</a></li>
                        <li><a  href="searchMenu.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET[admin] ?>">Search Menu</a></li>
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
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <section id="main-content">
          <section class="wrapper">
            <div class="row">
              <div class="col-md-12">
                <form action= "placeOrder.php" method="post">
                  <ul class="list-group">
                    <br>
                    <li class="list-group-item">
                      <span class="prefix">Name on Order:</span>
                      <span class="label label-success"> <?php echo $_GET['fname']?><?php echo " "?><?php echo $_GET['lname']?> </span>
                    </li>
                    <li class="list-group-item">
                      <span class="prefix">Employee ID:</span>
                      <span class="label label-success"> <?php echo $_GET['accountId']?> </span>
                    </li>

                  <input type="hidden" name="accountId" value="<?php echo $_GET['accountId']?>" pattern="^[0-9 ]{10}$" required><br>
                  <input type="hidden" name="fname" value="<?php echo $_GET['fname']?>"  ><br>
                  <input type="hidden" name="lname" value="<?php echo $_GET['lname']?>" ><br>

                  <p><a href="insertForm.php?accountId=<?php echo $_GET['accountId'] ?>&fname=<?php echo $_GET['fname'] ?>&lname=<?php echo $_GET['lname'] ?>&admin=<?php echo $_GET['admin'] ?>">Insert A New Item</a><p>




                  <br>
                  <ul class="new-style">
                    <li class="new-style"><a href="#classicPizzas"> Classic<br> Pizzas </a></li>
                    <li class="new-style"><a href="#specPizzas"> Specialty<br> Pizzas </a></li>
                    <li class="new-style"><a href="#dipSauce"> Dipping<br> Sauces </a></li>
                    <li class="new-style"><a href="#entrees">Entrees<br> and Sides</a></li>
                    <li class="new-style"><a href="#BYO">Build<br> Your Own</a></li>
                    <li class="new-style"><a href="#Sauces">Sauces<br> &nbsp;</a></li>
                    <li class="new-style"><a href="#Cheeses">Cheeses<br> &nbsp;</a></li>
                    <li class="new-style"><a href="#Veggies">Veggies<br> &nbsp;</a></li>
                    <li class="new-style"><a href="#Meats">Meats<br>&nbsp;</a></li>
                    <li class="new-style"><a href="#fresh">Fresh<br> Toppings</a></li>
                    <li class="new-style"><a href="#Subs">Subs<br> &nbsp;</a></li>
                    <li class="new-style"><a href="#submit">Submit</a></li>
                  </ul>


               <?php

                //path to the SQLite database file
                $db_file = './database4/cellar.db';

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
                  $saucesQ = "select * from menu where itemType =  'Sauces';";
                  $cheesesQ = "select * from menu where itemType = 'Cheeses';";
                  $veggiesQ = "select * from menu where itemType =  'Veggies';";
                  $meatsQ = "select * from menu where itemType =  'Meats';";
                  $freshQ = "select * from menu where itemType =   'Fresh Toppings';";
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
              $id=  $_GET['accountId'];
                $fname=$_GET['fname'];
              $lname=  $_GET['lname'];
              $admin=  $_GET['admin'];




                  ?>

              <a name="classicPizzas"></a>
              <h1 align="center">Classic Pizzas</h1>
              <table >
              <thead>
                <tr>
                  <th><h2>Types</h2></th>
                  <th><h2>Size</h2></th>
                  <th><h2>Price</h2></th>
                  <th><h2>Updates</h2></th>
                  <th><h2>Delete</h2></th>

                </tr>
              </thead>
              <tbody>
              <?php
              //Print each set with a Header and all the items within it. Basically print all the items appropiate to each header
                foreach($classicPizzasS as $tuple)
                {
                        $idItem = $tuple[itemID];
                         $price = $tuple[price];
                         $name = $tuple[itemName];
                         $type = $tuple[itemType];
                         $size = $tuple[size];
              ?>
                <tr>
                  <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
                  <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
                  <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
                  <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
                    <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>

              </tr>
              <?php
                }
              ?>
            </table>
            <a name="specPizzas"></a>
            <h1 align="center">Specialty Pizzas</h1>
            <table >
            <thead>
              <tr>
                <th><h2>Types</h2></th>
                <th><h2>Size</h2></th>
                <th><h2>Price</h2></th>
                <th><h2>Updates<h2></th>
                  <th><h2>Delete</h2></th>

              </tr>
            </thead>
            <tbody>
            <?php
              foreach($specPizzaS as $tuple)
              {
                $idItem = $tuple[itemID];
                 $price = $tuple[price];
                 $name = $tuple[itemName];
                 $type = $tuple[itemType];
                 $size = $tuple[size];
            ?>
              <tr>
                <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
                <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
                <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
                <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
                <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>


              </tr>
            <?php
              }
            ?>
          </table>

          <a name="dipSauce"></a>
          <h1 align="center">Dipping Sauces<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(One Size Only)</h1>
          <table >
          <thead>
            <tr>
              <th><h2>Types</h2></th>
              <th><h2>Price</h2></th>
              <th><h2>Updates<h2></th>
                <th><h2>Delete</h2></th>
            </tr>
          </thead>
          <tbody>
          <?php
            foreach($dipSauceS as $tuple)
            {
              $idItem = $tuple[itemID];
               $price = $tuple[price];
               $name = $tuple[itemName];
               $type = $tuple[itemType];
               $size = $tuple[size];
          ?>
            <tr>
              <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
              <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
              <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
              <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



            </tr>
          <?php
            }
          ?>
        </table>

        <a name="entrees"></a>
        <h1 align="center">Entrees and Sides </h1>
        <table >
        <thead>
          <tr>
            <th><h2>Types</h2></th>
            <th><h2>Size</h2></th>
            <th><h2>Price</h2></th>
            <th><h2>Updates</h2></th>
            <th><h2>Delete</h2></th>

          </tr>
        </thead>
        <tbody>
        <?php
          foreach($EandSS as $tuple)
          {
            $idItem = $tuple[itemID];
             $price = $tuple[price];
             $name = $tuple[itemName];
             $type = $tuple[itemType];
             $size = $tuple[size];
        ?>
          <tr>
            <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
            <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
            <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
            <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
            <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



          </tr>
        <?php
          }
        ?>
      </table>

      <a name="BYO"></a>
      <h1 align="center">Build Your Own </h1>
      <table >
      <thead>
        <tr>
          <th><h2>Types</h2></th>
          <th><h2>Size</h2></th>
          <th><h2>Price</h2></th>
          <th><h2>Updates</h2></th>
          <th><h2>Delete</h2></th>

        </tr>
      </thead>
      <tbody>
      <?php
        foreach($BYOPS as $tuple)
        {
          $idItem = $tuple[itemID];
           $price = $tuple[price];
           $name = $tuple[itemName];
           $type = $tuple[itemType];
           $size = $tuple[size];
      ?>
        <tr>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
          <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
          <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



        </tr>
      <?php
        }
      ?>
      </table>

      <a name="Sauces"></a>
      <h1 align="center">Sauces </h1>
      <table >
      <thead>
        <tr>
          <th><h2>Types</h2></th>
          <th><h2>Size</h2></th>
          <th><h2>Price</h2></th>
          <th><h2>Updates</h2></th>
          <th><h2>Delete</h2></th>

        </tr>
      </thead>
      <tbody>
      <?php
        foreach($saucesS as $tuple)
        {
          $idItem = $tuple[itemID];
           $price = $tuple[price];
           $name = $tuple[itemName];
           $type = $tuple[itemType];
           $size = $tuple[size];
      ?>
        <tr>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
          <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
          <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



        </tr>
      <?php
        }
      ?>
      </table>

      <a name="Cheeses"></a>
      <h1 align="center">Cheeses </h1>
      <table >
      <thead>
        <tr>
          <th><h2>Types</h2></th>
          <th><h2>Size</h2></th>
          <th><h2>Price</h2></th>
          <th><h2>Updates</h2></th>
          <th><h2>Delete</h2></th>

        </tr>
      </thead>
      <tbody>
      <?php
        foreach($cheesesS as $tuple)
        {
          $idItem = $tuple[itemID];
           $price = $tuple[price];
           $name = $tuple[itemName];
           $type = $tuple[itemType];
           $size = $tuple[size];
      ?>
        <tr>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
          <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
          <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



        </tr>
      <?php
        }
      ?>
      </table>

      <a name="Veggies"></a>
      <h1 align="center">Veggies </h1>
      <table >
      <thead>
        <tr>
          <th><h2>Types</h2></th>
          <th><h2>Size</h2></th>
          <th><h2>Price</h2></th>
          <th><h2>Updates</h2></th>
          <th><h2>Delete</h2></th>

        </tr>
      </thead>
      <tbody>
      <?php
        foreach($veggiesS as $tuple)
        {
          $idItem = $tuple[itemID];
           $price = $tuple[price];
           $name = $tuple[itemName];
           $type = $tuple[itemType];
           $size = $tuple[size];
      ?>
        <tr>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
          <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
          <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



        </tr>
      <?php
        }
      ?>
      </table>

      <a name="Meats"></a>
      <h1 align="center">Meats </h1>
      <table >
      <thead>
        <tr>
          <th><h2>Types</h2></th>
          <th><h2>Size</h2></th>
          <th><h2>Price</h2></th>
          <th><h2>Updates</h2></th>
          <th><h2>Delete</h2></th>

        </tr>
      </thead>
      <tbody>
      <?php
        foreach($meatsS as $tuple)
        {
          $idItem = $tuple[itemID];
           $price = $tuple[price];
           $name = $tuple[itemName];
           $type = $tuple[itemType];
           $size = $tuple[size];
      ?>
        <tr>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
          <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
          <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



        </tr>
      <?php
        }
      ?>
      </table>

      <a name="fresh"></a>
      <h1 align="center">Fresh Toppings </h1>
      <table >
      <thead>
        <tr>
          <th><h2>Types</h2></th>
          <th><h2>Size</h2></th>
          <th><h2>Price</h2></th>
          <th><h2>Updates</h2></th>
          <th><h2>Delete</h2></th>

        </tr>
      </thead>
      <tbody>
      <?php
        foreach($freshS as $tuple)
        {
          $idItem = $tuple[itemID];
           $price = $tuple[price];
           $name = $tuple[itemName];
           $type = $tuple[itemType];
           $size = $tuple[size];
      ?>
        <tr>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
          <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
          <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



        </tr>
      <?php
        }
      ?>
      </table>

      <a name="Subs"></a>
      <h1 align="center">Subs </h1>
      <table >
      <thead>
        <tr>
          <th><h2>Types</h2></th>
          <th><h2>Size</h2></th>
          <th><h2>Price</h2></th>
          <th><h2>Updates</h2></th>
          <th><h2>Delete</h2></th>

        </tr>
      </thead>
      <tbody>
      <?php
        foreach($subsS as $tuple)
        {
          $idItem = $tuple[itemID];
           $price = $tuple[price];
           $name = $tuple[itemName];
           $type = $tuple[itemType];
           $size = $tuple[size];
      ?>
        <tr>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[itemName]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[size]</font>"; ?></td>
          <td><?php echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[price]</font>"; ?></td>
          <td><?php echo "<a href='formUpdate.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Update Info</a><br>";?></td>
          <td><?php echo "<a href='delete.php?accountId=$id&fname=$fname&lname=$lname&admin=$admin&itemID=$idItem&price=$price&name=$name&type=$type&size=$size'>Delete</a><br>";?></td>



        </tr>


      <?php
        }
      ?>
      </table>
      <br>

   </form>

              <?php
                  //Disconnected from database
                  $db = null;
              }
              catch(PDOException $e)
              {
                  die('Exception : '.$e->getMessage());
              }

              ?>

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

  <script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("myBtn").style.display = "block";


    } else {
      document.getElementById("myBtn").style.display = "none";

    }
  }
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }


  </script>

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
