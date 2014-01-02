<?php
include('connect.php');
include('import.php');
$nickname = $row['nickname'];

?>

<html>

<a href="logout.php">Logout</a><br/>
<?php
echo "Welcome back, $nickname!<br/>";
?>

<a href="profile.php">Edit Profile</a><br/>

</html>
