
<?php
$errors=array();

$category = "";
session_start();
$db = mysqli_connect('localhost', 'root', '', 'ourproject');
//TECHNICAL LOGIN VALIDATION
	 	if (isset($_POST['tech_sub'])) 
	 	{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['pwd']);

  if (empty($username)||empty($password)) {
    array_push($errors, "Username and password Required");
    header('Location:login_temp.php');

  }
  
  if (count($errors) == 0) {
    
    $query = "SELECT * FROM tech_login WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header("location: techTable.php");
    }else {
      array_push($errors, "Wrong Credentials");
    }
  }
}

	 	

    
?>