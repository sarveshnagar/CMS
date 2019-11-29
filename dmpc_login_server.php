
<?php
$errors=array();

$category = "";
session_start();
$db = mysqli_connect('localhost', 'root', '', 'ourproject');
//DMPC LOGIN VALIDATION
if (isset($_POST['dmpc_sub'])) 
    {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['pwd']);

  if (empty($username)) {
    array_push($errors, "Username Required");
    header('Location:dmpc_login.php');
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
    header('Location:dmpc_login.php');
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM dmpc_login WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: dmpc_table.php');
    }else {
      array_push($errors, "Wrong Credentials");
            
    }

  }
}
	 	

    
?>