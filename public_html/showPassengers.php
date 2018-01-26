
<!DOCTYPE html>
<html>
<body>
<h2>List of all passengers</h2>
<p><a href="form.php">Make a New Passenger</a><p>
<p><a href="dbQueryForm.php">Make a Query</a><p>
<p>
    <?php

        //path to the SQLite database file
        $db_file = './myDB2/airport.db';

        try {
            //open connection to the airport database file
            $db = new PDO('sqlite:' . $db_file);

            //set errormode to use exceptions
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //return all passengers, and store the result set
            $query_str = "select * from passengers;";
            $result_set = $db->query($query_str);
		$edit="edit";

            //loop through each tuple in result set and print out the data
            //ssn will be shown in blue (see below)
            foreach($result_set as $tuple) {
		 $fname = $tuple[f_name];
		 $mname = $tuple[m_name];
		 $lname = $tuple[l_name];
		 $ssn = $tuple[ssn];

                 echo "<font color='blue'>$tuple[ssn]</font> $tuple[f_name] $tuple[m_name] $tuple[l_name] <a href='form.php?fname=$fname&mname=$mname&lname=$lname&ssn=$ssn&act=$edit'>Update Info</a><br>/n";

	    }

            //Disconnected from database
            $db = null;
        }
        catch(PDOException $e) {
            die('Exception : '.$e->getMessage());
        }

    ?>

</p>
</body>
</html>
