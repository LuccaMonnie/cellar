<?php

 //path to the SQLite database file
 $db_file = './database4/cellar.db';


 try {
   //open connection to the  database file
   $db = new PDO('sqlite:' . $db_file);
   //set errormode to use exceptions
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



try{

 $role = $_POST['role'];
if($role!="Employee"){


        $stmt = $db-> prepare("INSERT INTO Customer VALUES (:id, :f_name, :l_name)");

          $IDNew = $_POST['id'];
          $fNew =  $_POST['f_name'];
          $lNew = $_POST['l_name'];
         // Bind parameters to statement variables
         echo $IDNew;
         echo $fNew;
         echo $lNew;
         $stmt->bindParam(':id', $IDNew);
         $stmt->bindParam(':f_name', $fNew);
         $stmt->bindParam(':l_name', $lNew);
         // $stmt = "INSERT INTO passengers
           // VALUES ('$_POST[f_name]', '$_POST[m_name]', '$_POST[l_name]', '$_POST[ssn]');";//==true){
           echo "here";

                   if($stmt->execute()){
                     //disconnect from db
                   $db = null;

                   echo "it worked";
                   $admin="False";
                   header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/index.php?accountId=$IDNew&fname=$fNew&lname=$lNew&admin=$admin"); /* Redirect browser */
                     exit();
                   }
                   else{
                     echo "nope";
                 //  die(header("location: http://10.250.94.73/~ubuntu/formPage.html?newPassFail=true&reason=password"));
                    }
                 }
      else{

        $stmt = $db-> prepare("INSERT INTO Employee VALUES (:id, :f_name, :l_name)");

          $IDNew = $_POST['id'];
          $fNew =  $_POST['f_name'];
          $lNew = $_POST['l_name'];
         // Bind parameters to statement variables
         echo $IDNew;
         echo $fNew;
         echo $lNew;
         $stmt->bindParam(':id', $IDNew);
         $stmt->bindParam(':f_name', $fNew);
         $stmt->bindParam(':l_name', $lNew);
         // $stmt = "INSERT INTO passengers
           // VALUES ('$_POST[f_name]', '$_POST[m_name]', '$_POST[l_name]', '$_POST[ssn]');";//==true){
           echo "here";

                   if($stmt->execute()){
                     //disconnect from db
                   $db = null;
                   $admin="True";
                   echo "it worked";
                   header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/index.php?accountId=$IDNew&fname=$fNew&lname=$lNew&admin=$admin"); /* Redirect browser */
                     exit();
                   }
                   else{
                     echo "nope";
                 //  die(header("location: http://10.250.94.73/~ubuntu/formPage.html?newPassFail=true&reason=password"));
                    }
  
      }
       }
   catch(Exception $e){
      echo $e;
    //  die(header("location: http://10.250.94.73/~ubuntu/form.php?fname=$fNew&mname=$mNew&lname=$lNew&ssn=$ssnOld&act=$edit&ssnFail=$fail"));

   }

   //  }
       }
       catch(PDOException $e) {
echo "down here";
           die('Exception : '.$e->getMessage());
 }


?>
