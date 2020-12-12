<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'php');

if (isset($_POST['reg'])) {
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city= mysqli_real_escape_string($db, $_POST['city']);

  if($password == $password){
    $sql = "INSERT INTO users (firstname, lastname, email, password, mobile, address, city) VALUES ('$firstname', '$lastname', '$email', '$password', '$mobile', '$address', '$city')";
    mysqli_query($db, $sql);
    $_SESSION['message'] = "You are logged in";
    $_SESSION['email'] = $email;
    header('location:login.php');
  }else{
    $_SESSION['message'] = "Passwords do not match";
  }
}
?>
