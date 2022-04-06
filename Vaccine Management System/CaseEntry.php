<?php	

    include "conn.php";

       $wid = $_POST['wid'];
	   $smartcardid = $_POST['smartcardid'];
	   $name = $_POST['name'];
	   $status = $_POST['status'];
	   $hostel = $_POST['hostel'];
	   $occupation = $_POST['occupation'];

       $stmt = $conn->prepare("INSERT INTO case_entry (`wid`,`smartcardid`,`name`,`status`,`hostel`,`occupation`) VALUES('$wid','$smartcardid','$name','$status','$hostel','$occupation')");
       $execval = $stmt->execute();
       echo $execval;
       $stmt->close();
       $conn->close();
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CaseEntry</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/mystyle.css">
</head>
<body class="body">
    <p><img class="image21" src="images/01.jpg">
        <a href="" class="p2"><input type="submit" value="Back"></a>
        <div class="r1"><u>New Case Entry</u></div>
    </p>
    <hr style="height:35px; border-width:0; color:#151E3D ; background-color:#151E3D">

    <section class="r3">
    <h2 style="color: white; margin-top: -12px;" >Please fill in this form to enter new case</h2>

    <form class="l1" action="#popup1" method="post">

        <div class="r4" >
            <label for="wid"><b>Warden Employee Id</b></label>
            <input type="text" id="wid" name="wid" required pattern="[a-zA-Z0-9]+">
        </div>

        <div class="r4">
            <label for="smartcardid"><b>Smart Card ID</b></label>
            <input type="text" id="smartcardid" name="smartcardid" required pattern="[a-zA-Z0-9]+">
        </div>

        <div class="r4" >
            <label for="name"><b>Name</b></label>
            <input type="text" id="name" name="name">
        </div>
        
        <div class="r4">
            <label for="status"><b>Status</b></label>
            <input type="text" id="status" name="status">
        </div>
      
         <div class="r4">
            <label for="hostel"><b>Hostel</b></label>
            <input type="text" id="hostel" name="hostel" >
        </div>
   
        <div class="r4">
            <label for="occupation"><b>Occupation</b></label>
            <input type="text" id="occupation" name="occupation">
        </div>
    
        <div class="r4">
            <input type="reset" value="RESET">
        </div>

        <div class="r4">
            <input type="submit" value="OK">
        </div>
</form>
</section>
<br>  
</body>
</html>
