<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    //$_SESSION['msg'] = "You must log in first";
    header('location: login_temp.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login_temp.php");
  }
?>
<?php 
    //session_start();
    $db = mysqli_connect('localhost','root','','ourproject');
    $username = $_SESSION['username'];
    
    $query = " SELECT Alloted_hostel FROM tech_login WHERE username = '$username'";
    $fetch = mysqli_query($db,$query);
    $row = mysqli_fetch_assoc($fetch);
    $ahostel = $row['Alloted_hostel'];

    $sql = "SELECT * FROM stu_details INNER JOIN hcomplaints ON hcomplaints.Comp_id = stu_details.Comp_id where Hostel_Name = '$ahostel'";
    $records = mysqli_query($db,$sql);
    
?>

<html>
<title>
</title>
<head>
    <header>
      <h1>Technician's Desk<a href="techTable.php?logout='1'" style="text-decoration: none;margin-left: 1370px;">
          <button class="btn2">Log Out</button></h1>
      
    </header>
    <style>
      .btn2{
        box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
      /*position:absolute; */
      border: none;
      outline: none;
      background: black;
      filter: opacity(80%);
      color: #fff;
      width:100px;
      font-size: 18px;
      cursor: pointer;
      font-family: century gothic;
      font-weight: bold;
      border-radius: 30px;
      padding: 10px;
      margin-top:0px;
      }
      a{
        color: white;
      }

	     header{
        background: url("grunge_texture_dark_126947_3840x2160.jpg");
      background-size: 50%;
        box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
        font-family: azonix;
        font-size: 20px;
        text-align: center;
        color: #fff;

        padding-top: 10px;
        text-shadow:  2px 4px 5px #000;
      }
        body{
            background: url("texture-wallpaper-58.jpg");
            background-size: 50%;
        }
        table{
            margin-top: 40px;
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
        .no_data{
      text-align: center;
      color: #e8e8e8;
      font-size: 100px;
      font-family: azonix;
      margin-top: 250px;
      text-shadow:  7px 4px 9px #000;
    }
    </style>
</head>
<body>


<?php
     

   if(mysqli_num_rows($records) > 0)  
   {
   	echo "<table id='a' cellpadding='0' cellspacing='0' border='0'>";
    echo "<tr id='headings'>";
     echo "<th>"."Comp_id"."</th>";
     echo "<th>"."Area"."</th>";
     echo "<th>"."Sub_Area"."</th>";
     echo "<th>"."Hostel Name"."</th>";
     echo "<th>"."Room no"."</th>";
    echo "</tr>";
    while($record = mysqli_fetch_assoc($records))
    {
      echo "<tr>";
      echo "<td>"."<a href='com_details.php?id=".$record['Comp_id']."'>".$record['Comp_id']."</a>"."</td>";
      echo "<td>".$record['Category']."</td>";
      echo "<td>".$record['Sub_Category']."</td>";
      echo "<td>".$record['Hostel_Name']."</td>";
      echo "<td>".$record['Room_No']."</td>";
      echo "</tr>";
    }
   }
   else
   {
   	  echo "<h1 class='no_data'>"."No Data"."</h1>";
   }

 ?>

</body>
</html>
