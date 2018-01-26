<?php

//echo '<p>Hello World</p>';


       //path to the SQLite database file
       $db_file = './myDB2/airport.db';

       try {
           //open connection to the airport database file
           $db = new PDO('sqlite:' . $db_file);

           //set errormode to use exceptions
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

               //  $result_set = $db->query($query_str);
       //  >prepare("INSERT INTO REGISTRY (fname,mname,lname,ssnEnter), VALUES ()")
try{

  $stmt = $db-> prepare("UPDATE 'passengers' SET f_name=:fname, m_name=:mname, l_name=:lname, ssn=:ssn WHERE ssn=:ssnOld");
    $fNew =  $_POST['f_name'];
     $mNew = $_POST['m_name'];
     $lNew = $_POST['l_name'];
   $ssnNew = $_POST['ssn'];
   $ssnOld = $_POST['oldssn'];

    // Bind parameters to statement variables
    $stmt->bindParam(':fname', $fNew);
    $stmt->bindParam(':mname', $mNew);
    $stmt->bindParam(':lname', $lNew);
    $stmt->bindParam(':ssn', $ssnNew);
    $stmt->bindParam(':ssnOld', $ssnOld);

         if(  $stmt->execute()){
             //disconnect from db
           $db = null;

            header("Location: http://10.250.94.73/~ubuntu/showPassengers.php"); /* Redirect browser */
             exit();
           }
        //   else{
          //die(header("location: http://10.250.94.73/~ubuntu/form.php?ssnFail=true"));

          // }
         }
   catch(Exception $e){
      echo $e;
      $edit="edit";
      $fail="true";
      die(header("location: http://10.250.94.73/~ubuntu/form.php?fname=$fNew&mname=$mNew&lname=$lNew&ssn=$ssnOld&act=$edit&ssnFail=$fail"));
   }

     }
       catch(PDOException $e) {
           die('Exception : '.$e->getMessage());
 }
?>
