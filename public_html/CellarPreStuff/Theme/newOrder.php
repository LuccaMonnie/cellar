<?php

 //path to the SQLite database file
 $db_file = './database3/cellar.db';


 try {
   //open connection to the  database file
   $db = new PDO('sqlite:' . $db_file);
   //set errormode to use exceptions
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   try{
   $stmt = $db-> prepare("INSERT INTO orderPlaced VALUES (:orderID, :accountId, :time)");

     $orderID =  $_POST['orderID'];
     $ID = $_POST['accountId'];
    // $timeOrder =  $_POST['timeC'];

echo $orderID;
echo $ID;

    // Bind parameters to statement variables
    $stmt->bindParam(':orderID', $orderID);
    $stmt->bindParam(':accountId', $ID);
  //  $stmt->bindParam(':timeC', $timeOrder);


    // $stmt = "INSERT INTO passengers
      // VALUES ('$_POST[f_name]', '$_POST[m_name]', '$_POST[l_name]', '$_POST[ssn]');";//==true){
      echo "heres";

              if($stmt->execute()){
                //disconnect from db
              $db = null;
              echo "it worked";
           //    header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/index.html"); /* Redirect browser */
                exit();
              }
              else{
                echo "nope";
            //  die(header("location: http://10.250.94.73/~ubuntu/formPage.html?newPassFail=true&reason=password"));

            }
            }
      catch(Exception $e){
        //echo "Df";
        // echo $e;
     //   $fail="true";
        echo "dfs";
       //  die(header("location: http://10.250.94.73/~ubuntu/form.php?fname=$fNew&mname=$mNew&lname=$lNew&ssn=$ssnOld&act=$edit&ssnFail=$fail"));
      // echo $e;

      }

try{
$stmt = $db-> prepare("INSERT INTO Ordereditem VALUES (:itemID, :orderID)");

  $ID = $_POST['itemID'];
  $orderID =  $_POST['orderID'];

 // Bind parameters to statement variables

 $stmt->bindParam(':itemId', $ID);
 $stmt->bindParam(':orderID', $orderID);

 // $stmt = "INSERT INTO passengers
   // VALUES ('$_POST[f_name]', '$_POST[m_name]', '$_POST[l_name]', '$_POST[ssn]');";//==true){
   echo "heres";

           if($stmt->execute()){
             //disconnect from db
           $db = null;
           echo "it worked";
        //    header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/index.html"); /* Redirect browser */
             exit();
           }
           else{
             echo "nope";
         //  die(header("location: http://10.250.94.73/~ubuntu/formPage.html?newPassFail=true&reason=password"));

         }
         }
   catch(Exception $e){
     //echo "Df";
     // echo $e;
  //   $fail="true";
     echo "dfs";
    //  die(header("location: http://10.250.94.73/~ubuntu/form.php?fname=$fNew&mname=$mNew&lname=$lNew&ssn=$ssnOld&act=$edit&ssnFail=$fail"));
    echo $e;

   }

   //  }
       }
       catch(PDOException $e) {
           die('Exception : '.$e->getMessage());
 }


?>
