    <?php

        //path to the SQLite database file
        $db_file = './myDB2/airport.db';

        try {
            //open connection to the airport database file
            $db = new PDO('sqlite:' . $db_file);

            //set errormode to use exceptions
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //return all passengers, and store the result set
            $stmt = $db-> prepare(":string");
              //$statement = $db->prepare($insert);
              echo "one";

            /*  $stmt->bindValue(':f_name', $_POST['f_name'], SQLITE3_TEXT);
              $stmt->bindValue(':m_name', $_POST['m_name'], SQLITE3_TEXT);
              $stmt->bindValue(':l_name', $_POST['l_name'], SQLITE3_TEXT);
              $stmt->bindValue(':ssn', $_POST['ssn'], SQLITE3_TEXT);*/
              $newQuery =  $_POST['query'];
            //   $mNew = $_POST['m_name'];
              // $lNew = $_POST['l_name'];
               //$ssnNew = $_POST['ssn'];
              // Bind parameters to statement variables
              $stmt->bindParam(':string', $newQuery);
            //  $stmt->bindParam(':m_name', $mNew);
            //  $stmt->bindParam(':l_name', $lNew);
            //  $stmt->bindParam(':ssn', $ssnNew);

          //$query_str = "$_POST[query]";
	  echo $query_str;

	 $results = $stmt->query();
	foreach($results as $row)
	{
    		print_r($row);
	}




//	echo "Stores into results";
//	while ($row = $results->fetchArray())
//	{
//
//	}

//            $result_set =
	//echo $query_str;
//	$db->query($query_str);
		//$query_str->excute();

//echo "sip";
//	    $rows = $query_str ->fetchAll();//(PDO::FETCH_ASSOC);
		//$result = $db->fetchAll()
//		print ($result);
//echo "dsf";
	 //$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch as associative array


            //loop through each tuple in result set and print out the data
            //ssn will be shown in blue (see below)
//            foreach($result_set as $tuple) {
  //            echo "<font color='blue'>$tuple[ssn]</font> $tuple[f_name] $tuple[m_name] $tuple[l_name]<br/>\n";
    //        }

            //disconnect from db
            $db = null;
        }
        catch(PDOException $e) {
            die('Exception : '.$e->getMessage());
        }
    ?>
