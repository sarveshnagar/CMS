<?php

$name = "";
$dept = "";
$cmp_id = "";
$regno = "";
$cmp_category = "";
$cmp_desc = "";
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
    $cmp_desc = mysqli_real_escape_string($db, $_POST['desc']);
    $cmp_category = mysqli_real_escape_string($db, $_POST['category']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $regno = mysqli_real_escape_string($db, $_POST['regno']);
    $dept = mysqli_real_escape_string($db, $_POST['dept']);   
        $pin = generatePIN();
        $date = date('Y-m-d H:i:s');
        $a = "Your complaint is registered";
        $b = "Deliverd to DMPC office";

        if(mysqli_query($db,"INSERT INTO dept_complaint_details (Date_Time,name,regno,dept,cmp_category,cmp_id,cmp_desc) 
              VALUES('$date','$name','$regno','$dept','$cmp_category','$pin','$cmp_desc')"))
        {
        	mysqli_query($db,"INSERT INTO status(Comp_id,main_status,a,a_date,b,b_date) VALUES ('$pin','Complain registered','$a','$date','$b','$date')");
            mysqli_query($db,"INSERT INTO alldcomplaints(Comp_id,Date_Time,Name,Reg_No,Dept,Subject,Cmp_desc)VALUES('$pin','$date','$name','$regno','$dept','$cmp_category','$cmp_desc')");
            header("Location:registered.php?id=$pin");  
            exit();
        }
        

    }

// $query = "INSERT INTO studentdetalis (hostel,room,name,regno,mobile,comp_id) 
//                VALUES('$hostel','$room','$name','$regno','$mobile','$pin')";
//      mysqli_query($db, $query);

    


?>