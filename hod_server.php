<?php

$errors=array();
$temp="incorrect";
$category="";
session_start();
$db=mysqli_connect('localhost','root','','ourproject');
if (isset($_POST['hod_sub'])) 
    {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['pwd']);

  if (empty($username)) {
    array_push($errors, "Username Required");
    header('Location:hod_login.php');
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
    header('Location:hod_login.php');
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM hod_view WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: hod_table.php');
    }else {
      array_push($errors, "Wrong Credentials");
    }
  }
}

?>