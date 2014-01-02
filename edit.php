<?php
include('connect.php');
include('import.php');






$last_name = $row['last_name'];
$first_name = $row['first_name'];
$middle_initial = $row['middle_initial'];
$email = $row['email'];
$mobile = $row['mobile'];


?>

<html>
<h1>Edit Information</h1>
<a href="home.php">Home</a><br/>
<a href="profile.php">Edit Profile</a><br/>
<form action="save.php" method="post">
Last Name:
<input type="text" name="input_last_name" value="<?php echo $last_name?>" /><br/>
First Name:
<input type="text" name="input_first_name" value="<?php echo $first_name?>" /><br/>
Middle Initial:
<input type="text" name="input_middle_initial" value="<?php echo $middle_initial?>" /><br/>
E-mail:
<input type="text" name="input_email" value="<?php echo $email?>" /><br/>
Mobile Number:
<input type="text" name="input_mobile" value="<?php echo $mobile?>" /><br/>
<input type="submit" value="Save Changes" name="save"/>


</form>


</html>