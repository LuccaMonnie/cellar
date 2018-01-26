<?php

echo '<p>Hello World</p>';
       //
       //  foreach($_GET['order'] as $checkbox
       // {
       //   echo "here";
       //   echo $checkbox . ' ';
       //  }


 //path to the SQLite database file
 $db_file = './database4/cellar.db';


 try {
   //open connection to the  database file
   $db = new PDO('sqlite:' . $db_file);
   //set errormode to use exceptions
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   try{
     $stmt2 = $db-> prepare("INSERT INTO OrderPlaced VALUES (:orderID, :accountId, :timeC, :status)");
     echo "hi";
       //$dayNew = $_POST['orderDate'];

       $cIDNew = $_POST['accountId'];
     //  $timeNew = $_POST['orderTime'];
      // Bind parameters to statement variables
      echo $cIDNew;
      echo $dayNew;
      echo $timeNew;
      $stmt2->bindValue(':orderID',null, PDO::PARAM_INT);
      $stmt2->bindParam(':accountId', $cIDNew);
      $stmt2->bindValue(':status',"Not started");

      //$stmt2->bindParam(':day', $dayNew);
     // $stmt2->bindParam(':timeOrderPlaced', $timeNew);
      // $stmt2 = "INSERT INTO passengers
        // VALUES ('$_POST[f_name]', '$_POST[m_name]', '$_POST[l_name]', '$_POST[ssn]');";//==true){
        echo "here";

                if($stmt2->execute())
                {
                      //disconnect from db
                //    $db = null;
                    echo "it worked!";
                    echo "This is where we start looking for the ID<br>";
                    try{
                      //echo "hi";
                      $order = $_POST['order'] ;
                      $quan = count($order);
                      echo " you chose".$quan;

                      $query_str = "select MAX(orderID) from OrderPlaced;";
                      $result_set = $db->query($query_str);

                      foreach($result_set as $tuple)
                       {
                        echo "<font color='RED'>$tuple[0]</font><br/>\n";

}
                        		//echo $result_set;
                        echo "hi";
                        for($i=0; $i < $quan; $i++)
                            {
                                   $stmt = $db-> prepare("INSERT INTO OrderedItem VALUES (:itemID, :orderID)");

                                     //$ID = $_POST['itemID'];
                                    // $orderID =  $_POST['orderID'];

                                    // Bind parameters to statement variables
                                  // echo $ID;
                                  // echo $orderID;
                                  $stmt->bindParam(':itemID', $order[$i]);
                                
                                  $stmt->bindParam(':orderID',$tuple[0]);

                            
   //foreach($order as $num)
     //   {
//echo "the num is".$order;


         // echo "loop";
         // echo $checkbox . ' ';
       // }



                            // $stmt = "INSERT INTO passengers
                              // VALUES ('$_POST[f_name]', '$_POST[m_name]', '$_POST[l_name]', '$_POST[ssn]');";//==true){

                                      if($stmt->execute()){
                           //disconnect from db
                      //   $db = null;

                                 echo "it worked for items here";
                              //  header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/viewOrder.php?accountId=$_GET['accountId']&fname=$_GET['fname']&lname=$_GET['lname']");
                                // exit();
                         }
                         else{
                           echo "nope";
                       //  die(header("location: http://10.250.94.73/~ubuntu/formPage.html?newPassFail=true&reason=password"));

                       }
                       echo $order[$i];
                     }
                     $id1=  $_POST['accountId'];
                     $id2=  $_POST['fname'];
                     $id3=  $_POST['lname'];
                     $id4=  $_POST['admin'];



                     header("Location:http://10.250.94.73/~ubuntu/CellarPreStuff/Theme/viewOrder.php?accountId=$id1&fname=$id2&lname=$id3&admin=$id4"); 
                     
                       }
                 catch(Exception $e){
                   echo "hi";
                    echo $e;
                  //  die(header("location: http://10.250.94.73/~ubuntu/form.php?fname=$fNew&mname=$mNew&lname=$lNew&ssn=$ssnOld&act=$edit&ssnFail=$fail"));

                }
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




   //  }
       //}
      // catch(PDOException $e) {
//echo "down here";
    //       die('Exception : '.$e->getMessage());
 //}


?>
