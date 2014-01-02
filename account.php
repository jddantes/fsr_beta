<?php
include('connect.php');
include('import.php');

?>
<html>
<h1>Change Account Settings</h1>
<a href="home.php">Home</a><br/>
<a href="profile.php">Edit Profile</a><br/>
Change Password</br>
<form action="accountsave.php" method="post">
Old Password: <input type="password" name="input_old_password"/><br/>
New Password: <input type="password" name="input_new_password1"/><br/>
Re-type New Password: <input type="password" name="input_new_password2"/><br/>


<input type="submit" name="submit" value="Save" />
</form>


</html>