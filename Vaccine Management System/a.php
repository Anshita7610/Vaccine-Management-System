<?php	
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "covidwebsite";
    
    $conn = new mysqli($server, $username, $password, $database);

    if(!$conn){
        die("Connection Failed due to". mysqli_error());
    }

    if(isset($_POST['OK']))
    {
       $wid = $_POST['wid'];
	   $smartcardid = $_POST['smartcardid'];
	   $name = $_POST['name'];
	   $status = $_POST['status'];
	   $hostel = $_POST['hostel'];
	   $occupation = $_POST['occupation'];

	   $sql = "INSERT INTO case_entry (`wid`,`smartcardid`,`name`,`status`,`hostel`,`occupation`) VALUES('$wid','$smartcardid','$name','$status','$hostel','$occupation');";

       if($conn->query($sql) === TRUE){} 
       else {
        echo "Error: $sql <br> $conn->error";
       }
       $conn->close();
    }    
?>