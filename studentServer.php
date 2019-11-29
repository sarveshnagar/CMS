<?php

$hostel = "";
$room = "";
$name = "";
$regno = "";
$mobile = "";
session_start();
$db = mysqli_connect('localhost', 'root', '', 'ourproject');

function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}	


if (isset($_POST['proceed'])){
	$hostel = mysqli_real_escape_string($db, $_POST['hostel']);
	$room = mysqli_real_escape_string($db, $_POST['room']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$regno = mysqli_real_escape_string($db, $_POST['regno']);
	$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
	$pin = generatePIN();
	$_SESSION['pin'] = $pin;

	if(mysqli_query($db,"INSERT INTO stu_details (Comp_Id,Hostel_Name,Room_No,Name,Reg_No,Mobile) 
			  VALUES('$pin','$hostel','$room','$name','$regno','$mobile')")){
		//header("Location:studentDetails.php");	
		header("Location:complaint.php");
		exit();
		}
  		

	}

// $query = "INSERT INTO studentdetalis (hostel,room,name,regno,mobile,comp_id) 
//   			  VALUES('$hostel','$room','$name','$regno','$mobile','$pin')";
//   	mysqli_query($db, $query);

  	


?>