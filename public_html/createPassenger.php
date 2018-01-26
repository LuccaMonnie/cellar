 <?php

//echo '<p>Hello World</p>';


        //path to the SQLite database file
        $db_file = './myDB2/airport.db';

        try {
            //open connection to the airport database file
            $db = new PDO('sqlite:' . $db_file);

            //set errormode to use exceptions
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


 try{

$stmt = $db-> prepare("INSERT INTO passengers VALUES (:f_name, :m_name, :l_name, :ssn)");

  $fNew =  $_POST['f_name'];
   $mNew = $_POST['m_name'];
   $lNew = $_POST['l_name'];
   $ssnNew = $_POST['ssn'];
  // Bind parameters to statement variables
  $stmt->bindParam(':f_name', $fNew);
  $stmt->bindParam(':m_name', $mNew);
  $stmt->bindParam(':l_name', $lNew);
  $stmt->bindParam(':ssn', $ssnNew);
  // $stmt = "INSERT INTO passengers
    // VALUES ('$_POST[f_name]', '$_POST[m_name]', '$_POST[l_name]', '$_POST[ssn]');";//==true){

    	      if($stmt->execute()){
              //disconnect from db
            $db = null;

             header("Location: http://10.250.94.73/~ubuntu/showPassengers.php"); /* Redirect browser */
              exit();
            }
          //  else{
          //  die(header("location: http://10.250.94.73/~ubuntu/formPage.html?newPassFail=true&reason=password"));

          //  }
          }
    catch(Exception $e){
      //echo "Df";
      // echo $e;
      $fail="true";
       die(header("location: http://10.250.94.73/~ubuntu/form.php?fname=$fNew&mname=$mNew&lname=$lNew&ssn=$ssnOld&act=$edit&ssnFail=$fail"));
    // echo $e;

    }

    //  }
        }
        catch(PDOException $e) {
            die('Exception : '.$e->getMessage());
	}


 ?>
