<?php

include "conn.php";

$Name = $_POST['name'];
$smartcardid = $_POST['smartcardid'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$admin = $conn->prepare("insert into admin(`full name`, `Smartcard/Employee id`, `email Address`, `password`, `Phone number`) values('$Name', '$smartcardid', '$email', '$password', '$phone')");
		$execval = $admin->execute();
		echo $execval;
		$admin->close();
		$conn->close();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Signup for Admin </title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="css/mystyle.css">
  
</head>

<body>
    <p><img class="image21" src="images/01.jpg">
        <a href="adminlogin.html" class="p2"><input type="submit" value="Back"></a>
    </p>
  <section class="login-form-wraps">
  <h1 style="color: white;" ><b>Signup Form</b></h1>
  <h1 style="color: white;" ><b>Admin</b></h1>
  <h3 style="color: white;" >Please fill in this form to create new account</h3>
  <form class="login-forms" action="#popup1" method="post">
        <!-- Full Name -->
        <div class="input-wrapper" >
            <label for="name"><b>Full Name</b></label>
            <input type="text" id="name" name="name">
        </div>
        <!-- Smard Card ID -->
        <div class="input-wrapper">
            <label for="smartcardid"><b>Smart Card ID</b></label>
            <input type="text" id="smartcardid" name="smartcardid" required pattern="[a-zA-Z0-9]+">
        </div>
        <!-- Email Address -->
        <div class="input-wrapper">
            <label for="email"><b>Email Address</b></label>
            <input type="email" id="email" name="email">
        </div>
         <!-- Password -->
         <div class="input-wrapper">
            <label for="password"><b>Password</b></label>
            <input type="password" id="password" name="password" >
        </div>
        <!-- Phone Number -->
        <div class="input-wrapper">
            <label for="phone"><b>Mobile Number</b></label>
            <input type="tel" id="phone" name="phone">
        </div>
    <!-- Sign Up -->
    <div class="input-wrapper"><input type="submit" value="Sign Up"></div>
    
</form>
</section>
</body>
</html>
