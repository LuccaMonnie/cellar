<?php

//echo '<p>Hello World</p>';


       //path to the SQLite database file
       $db_file = './database4/cellar.db';

       try {
           //open connection to the airport database file
           $db = new PDO('sqlite:' . $db_file);

           //set errormode to use exceptions
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

               //  $result_set = $db->query($query_str);
       //  >prepare("INSERT INTO REGISTRY (fname,mname,lname,ssnEnter), VALUES ()")
try{

  $stmt = $db-> prepare("DELETE FROM 'Menu' WHERE itemID=:itemID");
    $id =  $_GET['itemID'];
     /*$price = $_GET['price'];
     $nameItem = $_GET['itemName'];
   $typeItem = $_GET['itemType'];
   $size = $_GET['size'];*/
   //$idOld = $_GET['olditemID'];

   $IDNew = $_GET['accountId'];
 $fNew = $_GET['fname'];
 $lNew = $_GET['lname'];
 $admin = $_GET['admin'];

    // Bind parameters to statement variables
    $stmt->bindParam(':itemID', $id);
  //  $stmt->bindParam(':price', $price);
  //  $stmt->bindParam(':itemName', $nameItem);
//    $stmt->bindParam(':itemType', $typeItem);
//    $stmt->bindParam(':size', $size);
  //  $stmt->bindParam(':itemIDOld', $idOld);

         if(  $stmt->execute()){
             //disconnect from db
           $db = null;
echo "hi";
header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/updates.php?accountId=$IDNew&fname=$fNew&lname=$lNew&admin=$admin"); /* Redirect browser */

                  //  header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/updates.php?accountId=$IDNew&fname=$fNew&lname=$lNew&admin=$admin"); /* Redirect browser */
          //   exit();
           }
         else{
          //die(header("location: http://10.250.94.73/~ubuntu/form.php?ssnFail=true"));
echo "bye";
        }
         }
   catch(Exception $e){
      echo $e;
      $edit="edit";
      $fail="true";
    //  die(header("location: http://10.250.94.73/~ubuntu/form.php?fname=$id&mname=$price&lname=$lNew&ssn=$ssnOld&act=$edit&ssnFail=$fail"));
   }

     }
       catch(PDOException $e) {
           die('Exception : '.$e->getMessage());
 }
?>
