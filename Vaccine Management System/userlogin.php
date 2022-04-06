<?php

include "conn.php";

if(isset($_POST['Sign in'])){
    
    $id_=$_POST['Smartcard/Employee Id.'];
    $password=$_POST['Password'];
    
    $sql="select * from user where Smartcard/Employee Id.='".$id_."'AND Pass='".$password."'";
    
    $result=mysqli_query($sql);
    
    if(mysqli_num_rows($result)==1){
        echo"<a href =userhome.html></a>";
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
    $conn->close();

?> 

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login for User </title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/mystyle.css"> 
</head>
<body>
  <p><img class="image21" src="images/01.jpg">
    <a href="index.html" class="p2"><input type="submit" value="Back"></a>
  </p> 
  <section class="login-form-wrap">
  <h1>Login for User</h1>
  <form class="login-form" action="userhome.html">
    <label>
      <input type="text" name="Smartcard/Employee Id." required placeholder="Smartcard/Employee Id.">
    </label>
    <label>
      <input type="password" name="password" required placeholder="Password">
    </label>
    <input type="submit" class="button" value="Sign in">
    <br>
    <a href="usersignup.php" class="button">Sign up</a>
	
  </form>
</section>
</body>
</html>