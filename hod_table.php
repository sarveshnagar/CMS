<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    //$_SESSION['msg'] = "You must log in first";
    header('location: hod_login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: hod_login.php");
  }
?>
<!DOCTYPE html>
<html>
<title>HOD office</title>
<head>
	<header>
    <h1 class="heading">HOD OFFICE</h1>
    <a href="hod_table.php?logout='1'" style="text-decoration: none;margin-left: 1370px;">
          <button class="btn2">Log Out</button>
    </a>

    <a href="Approve_table.php" style="text-decoration: none;margin-left: 1200px; ">
          <button class="btn">All approved complaints</button>
    </a>
    
		
	</header>
	<style type="text/css">
    .heading{
      box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
      color: #e8e8e8;
      text-shadow:  1px 4px 5px #000;
      padding: 60px;
      background: url("grunge_texture_dark_126947_3840x2160.jpg");
          background-size: 100%;
      font-size: 50px;
      filter: opacity(100%);
      font-family: azonix;
      margin: 0px;
      text-align: center;
    }
    body{
       background-image: url("texture-wallpaper-58.jpg");
          background-size: 50%;
          box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
    }
    button {
      box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
      /*background: url("paint_art_stripes_stains_117030_1920x1080.jpg");*/
      background-size: 100%;
      width: 140px;
      position:absolute; 
      border: none;
      outline: none;
      padding: 10px;
      background: black;
      filter: opacity(80%);
      color: #fff;
      font-size: 18px;
      cursor: pointer;
      font-family: century gothic;
      font-weight: bold;
      border-radius: 30px;

      /*float: right;*/

      /*margin-top: 50px;*/
      /*margin-left: 1300px;*/
    }
		.no_data{
      text-align: center;
      color: #e8e8e8;
      font-size: 100px;
      font-family: azonix;
      margin-top: 250px;
      text-shadow:  7px 4px 9px #000;
    }
    table{
            margin-top: 50px;
            background: transparent;
            /*box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);*/
            width: 100%;
            table-layout: fixed;
        }
        #headings{
            background-color: white;
            box-shadow: 1px 4px 5px rgba(0, 0, 0, .9);
            text-transform: uppercase;
            font-family: century gothic;

        }
        th{
            padding: 15px;
        }
        tr{
            /*background: #262626;*/
            background: rgba(0,0,0,.6);
        }
        tr:hover{
            box-shadow: 1px 4px 5px 4px rgba(0, 0, 0, .8);
        }
        td{

            text-align: center;
            padding: 20px;
            font-family: tw cen mt;
            color: white;
            vertical-align: middle;
        }
        a{
          color: white;
        }
	</style>
</head>

<body>
        
      	<p>  
      		<?php
      		//session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            
            $sql = "SELECT * FROM hod_complaint";
            $records = mysqli_query($db,$sql);
            $delete = "delete";
            $hod = "HOD";
            $Approve = "Approve";
     

            if(mysqli_num_rows($records) > 0)  
            {
            echo "<table id='a' cellpadding='0' cellspacing='0' border='0'>>";
            echo "<tr id='headings'>";
            echo "<th>"."Comp_id"."</th>";
            echo "<th>"."Name"."</th>";
            echo "<th>"."Registration No"."</th>";
            echo "<th>"."Subject"."</th>";
            echo "<th>"."Description"."</th>";
            echo "<th colspan='2'>"."Action"."</th>";
            echo "</tr>";
           while($record = mysqli_fetch_assoc($records))
           {
            echo "<tr>";
            echo "<td>".$record['cmp_id']."</td>";
            echo "<td>".$record['name']."</td>";
            echo "<td>".$record['regno']."</td>";
            echo "<td>".$record['cmp_category']."</td>";
            echo "<td>".$record['cmp_desc']."</td>";
            echo "<td>"."<a href='delete_hod.php?id=".$record['cmp_id']."'>".$delete."</a>"."</td>";
            echo "<td>"."<a href='Approve_hod.php?id=".$record['cmp_id']."'>".$Approve."</a>"."</td>"; 
            echo "</tr>";
            }
            }
            else
            {
             echo "<h1 class='no_data'>"."No Data"."</h1>";
             }
            ?>
        </p>
</body>
</html>