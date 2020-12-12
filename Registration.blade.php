<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'php');

if (isset($_GET['reg'])) {
  $firstname = mysqli_real_escape_string($db, $_GET['firstname']);
  $lastname = mysqli_real_escape_string($db, $_GET['lastname']);
  $email = mysqli_real_escape_string($db, $_GET['email']);
  $password = mysqli_real_escape_string($db, $_GET['password']);
  $mobile = mysqli_real_escape_string($db, $_GET['mobile']);
  $address = mysqli_real_escape_string($db, $_GET['address']);
  $city= mysqli_real_escape_string($db, $_GET['city']);

  if($password == $password){
    $sql = "INSERT INTO usertable2 (firstname, lastname, email, password, mobile, address, city) VALUES ('$firstname', '$lastname', '$email', '$password', '$mobile', '$address', '$city')";
    mysqli_query($db, $sql);
    $_SESSION['message'] = "You are logged in";
    $_SESSION['email'] = $email;
    header('location: nlogin.blade.php');
  }else{
    $_SESSION['message'] = "Passwords do not match";
  }
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html >
<head>
<style media="screen">
*{
  padding: 0;
  margin: 0;
}
body{
 background-image: url(h3.jpg);
 height: 100vh;
 background-position: center;
 font-family: sans-serif;
}
.regform{
  width: 800px;
  border-radius: 15px,15px,0;

  color: white;
  margin:auto;
  padding: 10px,0px,10px,0px;
  text-align: center;
}
.main{
  width: 900px;
  color: white;
  margin:auto;
}
form{
  padding:10px;
}
#name{
  width: 100%;
  height: 100px;
}
.name{
  top:50px;
  margin-left: 105px;
  margin-top: 30px;
  width: 125px;
  color: white;
  font-size: 18px;
  font-weight: 700px;
}
.firstname{
  position: relative;
  left: 200px;
  top: -37px;
  line-height: 40px;
  border-radius: 6px;
  padding: 0 22px;
  font-size: 16px;
}
.lastname{
  position: relative;
  left: 455px;
  top: -99px;
  line-height: 40px;
  border-radius: 6px;
  padding: 0 22px;
  font-size: 16px
  color=#555;
}
.firstlabel{
  position: relative;
  color: #e5e5e5;
  text-transform: capitalize;
  font-size: 14px;
  left: 203px;
  top:-35px;
}
.lastlabel{
  position: relative;
  color: #e5e5e5;
  text-transform: capitalize;
  font-size: 14px;
  left:250px;
  top:-64px;
}
.email{
  border-radius: 6px;
  position: relative;
  left: 200px;
  top: -75px;
  line-height: 40px;
  width: 420px;
  border-radius: -6px;
  padding: 0 22px;
  color: #555;
}
.password{
  border-radius: 6px;
  position: relative;
  left: 200px;
  top: -75px;
  line-height: 40px;
  width: 420px;
  border-radius: -6px;
  padding: 0 22px;
  color: #555;
}
.mobile{
  border-radius: 6px;
  position: relative;
  left: 200px;
  top: -75px;
  line-height: 40px;
  width: 420px;
  border-radius: -6px;
  padding: 0 22px;
  color: #555;
}
.address{
  border-radius: 6px;
  position: relative;
  left: 200px;
  top: -75px;
  line-height: 40px;
  width: 420px;
  border-radius: -6px;
  padding: 0 22px;
  color: #555;
}
.ell{
  position: relative;
  top:-75px;
left: 205px;
}

.pl{
  position: relative;
  top:-30px;
left: -270px;
}
.ml{
  position: relative;
  top:-29px;
left: -270px;
}
.al{
  position: relative;
  top:-30px;
left: -270px;
}
.nl{
  position: relative;
  top:-40px;
left: 205px;
}
.city{
  border-radius: 6px;
  position: relative;
  left: 90px;
  top: -25px;
  line-height: 45px;
  width: 470px;
  border-radius: -6px;
  padding: 0 22px;
  color: #555;
  height: 55px;
}
.scity{
  position: relative;
  top:-114px;
left: 90px;
color: white;
}
.b{
  position:relative;
  width: 470px;
  border-radius: 10px;
  color:white;
  top:-65px;
  left: 202px;
  text-align: center;
  height: 45px;
  background-color: green;
}

</style>
</head>
<body>
  <header>
    <div class="regform">
    <h1>Registration from</h1><br><br>
    </div>
  </header>
<div class="main">
  <form method="GET" action="#" >
    <div id="name">
  <h2 class="name"></h2>
  <label class="nl">Name</label><br>
  <input class="firstname"type="text" name="firstname"><br>
  <label class="firstlabel">First Name</label><br>
  <input class="lastname"type="text" name="lastname">
  <label class="lastlabel">Last Name</label>
</div><br><br>
<label class="ell">Email</label>
  <h2></h2>
<input class="email" type="email" name="email">


  <label class="pl">Password</label>
  <h2 class="name"></h2>
  <input class="password"type="password" name="password">

    <label class="ml">Mobile No</label>
  <h2 class="name"></h2>
  <input class="mobile" type="text" name="mobile">

  <label class="al">Address</label>
  <h2 class="name"></h2>
  <input class="address"type="text" name="address">
 <div class="city">
<select class="city" name="city">
  <option value="Dhaka">Dhaka</option>
  <option value="Rajshahi">Rajshahi</option>
  <option value="Rangpur">Rangpur</option>
  <option value="Sylhet">Sylhet</option>
  <option value="Mymensingh">Mymensingh </option>
  <option value="Khulna">Khulna </option>
  <option value="Barisal">Barisal</option>
  <option value="Chittagong">Chittagong</option>
</select>
<label class="scity">Select city</label>
</div><br>
<input type="submit" class="b" name="reg" value="Register">

  </form>
</div>
</body>
</html>
