<?php
$db = mysqli_connect('localhost', 'root', '', 'php');

if (isset($_POST['email']) and isset($_POST['password'])){

// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM users WHERE email='$email' and password='$password'";

$result = mysqli_query($db, $query) or die(mysqli_error($db));
$count = mysqli_num_rows($result);

if ($count == 1){
header('location: medical.blade.php');

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}

?>
