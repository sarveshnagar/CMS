<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    //$_SESSION['msg'] = "You must log in first";
    header('location: dmpc_login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: dmpc_login.php");
  }
?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<head>
    <header>
        <span style="margin-top: 10px; font-size:30px;cursor:pointer;color: white; float: left; font-family: tw cen mt" onclick="openNav()">&#9776;</span>

        <h1>DMPC Office</h1>
    </header>
    <style type="text/css">
         header{
             background: url("grunge_texture_dark_126947_3840x2160.jpg");
            background-size: 100%;
            font-family: azonix;
            padding: 30px;
            box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
            font-family: azonix;
            font-size: 20px;
            text-align: center;
            color: #fff;
            text-shadow:  2px 4px 5px #000;
        }
        body{
             background-image: url("texture-wallpaper-58.jpg");
          background-size: 50%;
          box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        a{
            color: white;
        }
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>

   <div id="mySidenav" class="sidenav" >
      <!--<a href='com_details.php?id=".$record['Comp_id']."'>".$record['Comp_id']."</a>".-->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="dudmpc_table.php?id=Ragging">Ragging</a>
      <a href="dudmpc_table.php?id=Attendence" >Attendence</a>
      <a href="dudmpc_table.php?id=Teachers">Teachers</a>
      <a href="dudmpc_table.php?id=Canteen">Canteen</a>
      <a href="dudmpc_table.php?id=Course">Course</a>
      <a href="dudmpc_table.php?id=Exam">Exam</a>
      <a href="dudmpc_table.php?id=Others">Others</a>
      <a href="Approve_table_dmpc.php" class="w3-bar-item w3-button">All Approved Complaints</a>
      <a href="dmpc_table.php?logout='1'" class="w3-bar-item w3-button">Log Out</a>
    </div>

    
    
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

<!-- Page Content -->
<!-- <div style="margin-left:25%">
<div class="w3-container w3-teal">
  <h1>DMPC view</h1>
</div>
      
<div class="abc">
	<p>
	</p>
</div> -->
</body>
</html>