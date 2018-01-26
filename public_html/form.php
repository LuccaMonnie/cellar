<!DOCTYPE php>
<html>

<?php 
if($_GET['ssnFail']=="true"){
echo "The ssn you entered already exists, please try again";
}

if($_GET['act']=="edit"): ?>
<form action="updatePassenger.php" method="post">
  First name:<br>
  <input type="text" name="f_name" value= "<?php echo $_GET['fname'] ?>" pattern="^[A-Za-z ]{1,20}$" required> <br>
  Middle name:<br>
  <input type="text" name="m_name" value="<?php echo $_GET['mname']?>" pattern="^[A-Za-z ]{1,20}$" ><br>
  Last name:<br>
  <input type="text" name="l_name" value="<?php echo $_GET['lname']?>" pattern="^[A-Za-z ]{1,20}$" required><br>
  SSN:<br>
  <input type="text" name="ssn" value="<?php echo $_GET['ssn']?>" pattern="^\d{3}-\d{2}-\d{4}$" required><br>
  <br>
  <input type="hidden" name="oldssn" value="<?php echo $_GET['ssn']?>"<br>
  <input type="submit" value="Update">
</form>


<?php endif; ?>


<?php
if($GET['ssnFail']=="true"){
echo "The ssn you entered already exists, please try again";
}
 if($_GET['act']==""): ?>
<form action="createPassenger.php" method="post">
  First name:<br>
  <input type="text" name="f_name" value= "<?php echo $_GET['fname'] ?>" pattern="^[A-Za-z ]{1,20}$" required> <br>
  Middle name:<br>
  <input type="text" name="m_name" value="<?php echo $_GET['mname']?>" pattern="^[A-Za-z ]{1,20}$" ><br>
  Last name:<br>
  <input type="text" name="l_name" value="<?php echo $_GET['lname']?>" pattern="^[A-Za-z ]{1,20}$" required><br>
  SSN:<br>
  <input type="text" name="ssn" value="<?php echo $_GET['ssn']?>" pattern="^\d{3}-\d{2}-\d{4}$" required><br>
  <br>
  <input type="submit" value="Submit">
</form>
<?php endif; ?>
</html>
