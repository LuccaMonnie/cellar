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

  $stmt = $db-> prepare("UPDATE 'OrderPlaced' SET status=:status WHERE orderID=:orderID");

   $stauts = $_POST['status'];
   $orderID = $_POST['orderID'];
echo $stauts;

   $IDNew = $_POST['accountId'];
 $fNew = $_POST['fname'];
 $lNew = $_POST['lname'];
 $admin = $_POST['admin'];

    // Bind parameters to statement variables
    $stmt->bindParam(':status', $stauts);
    $stmt->bindParam(':orderID', $orderID);

         if(  $stmt->execute()){
             //disconnect from db
           $db = null;
echo "hi";
                    // header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/viewOrder.php?accountId=$id1&fname=$id2&lname=$id3");

                    header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/customerOrder.php?accountId=$IDNew&fname=$fNew&lname=$lNew&admin=$admin"); /* Redirect browser */
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
