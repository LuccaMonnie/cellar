

 <?php
   //path to the SQLite database file
  /*$db_file = './database4/cellar.db';
   try {
     //open connection to the airport database file
     $db = new PDO('sqlite:' . $db_file);
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $getCust = "select exists() from customers;";
    // $itemIDQ = "select * from orderedItem natural join orderPlaced;";

     $orderIDS =  $db->query($getCust);
  //   $itemIDS = $db->query($itemIDQ);
     foreach($orderIDS as $tuple) {
       echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[orderID] $tuple[customerID] $tuple[day] $tuple[timeOrderPlaced]</font>";
     }
     foreach($itemIDS as $tuple) {
       echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[orderID] $tuple[itemID]</font>";
     }*/
     $IDNew = $_POST['id'];
     $fNew =  $_POST['f_name'];
     $lNew = $_POST['l_name'];
     /*$guestID =  $_GET['accountId'] ;

     if ($guestID === 001) {
       header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/index.php?accountId=001&fname=Guest&lname=User"); /* Redirect browser */
     /*if ($IDNew === 000) {
       header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/customerOrder.php?accountId=$IDNew&fname=$fNew&lname=$lNew");
       exit();
     } else {*/
       //path to the SQLite database file
       $db_file = './database4/cellar.db';
       try {
        //open connection to the cellar database file
        $db = new PDO('sqlite:' . $db_file);
        //set errormode to use exceptions
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  echo $accID;
        $query_str = "select * from customer where customerID =".$IDNew;
        $result_set = $db->query($query_str);

        $query_str2 = "select * from Employee where employeeID =".$IDNew;
        $result_set2 = $db->query($query_str2);

        foreach($result_set as $tuple) {
          //echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[customerID] $tuple[firstName] $tuple[lastName] </font>";
          $fname = $tuple[firstName];
          $lname = $tuple[lastName];
          if ($fname !== null && $lname !== null) {
            $admin="False";
            header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/index.php?accountId=$IDNew&fname=$fname&lname=$lname&admin=$admin"); /* Redirect browser */
            exit();
          }
        }

                foreach($result_set2 as $tuple) {
                  echo "<font size=\"3\" face = \"Ruda\" color=\"black\"> $tuple[customerID] $tuple[firstName] $tuple[lastName] </font>";
                  $fname = $tuple[firstName];
                  $lname = $tuple[lastName];
                  if ($fname !== null && $lname !== null) {
                    $admin="True";
                    header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/index.php?accountId=$IDNew&fname=$fname&lname=$lname&admin=$admin"); /* Redirect browser */
                    exit();
                  }
                }
        //Disconnected from database
        $db = null;
      }
      catch(PDOException $e) {
        die('Exception : '.$e->getMessage());
      }
  //  }
 ?>
<html>
  <head>
    <script>alert("The ID you entered doesn't exists. Please try again.")</script>
    <meta http-equiv="refresh" content="1;url=login.php">
  </head>
</html>
