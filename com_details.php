<?php
    session_start();
    $id = $_GET["id"];
    $_SESSION['id'] = $id;
    $username = $_SESSION['username'];
    $db = mysqli_connect('localhost','root','','ourproject');
    $sqli = "SELECT * FROM tech_login WHERE username = '$username'";
    $fetch = mysqli_query($db,$sqli);
    
    
    $sql = "SELECT hcomplaints.Comp_id,Category,Sub_Category,Name,Room_No,Hostel_Name,Reg_No,Mobile,Description,Date_Time FROM stu_details INNER JOIN hcomplaints ON hcomplaints.Comp_id= stu_details.Comp_id WHERE hcomplaints.Comp_id = '$id' ";
    $result = mysqli_query($db,$sql);

?>
<html>
	<header><a href="techTable.php"><button class="btn2">←</button></a></header>
	<style type="text/css">
		.btn2{
    font-size: 30px;
    box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
    font-family: tw cen mt;
    background: transparent;
    cursor: pointer;
    color: white;
    font-weight: bold;
    margin-bottom:30px; 
    outline: none;
  }
		.box{
			text-align: center;
        color: white;
        width: 490px;
      height: 550px;
      background: rgba(0,0,0,.2);
      color: #fff;

      top:40%;
      left: 65%;
      position: absolute;
      transform: translate(-50%,-50%);
      box-sizing: border-box;
      padding: 70px 30px;
      box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
      font-family: tw cen mt;
      font-size: 18px;
      margin-top: 100px;
      }
      body{
      background-image: url("mohammad-alizade-631039-unsplash.jpg");
      background-size: 100%;
      }
      #name{
      	text-shadow:  2px 4px 5px #000;
      	color: white;
      	font-size: 40px;
      	font-family: tw cen mt;
      	margin-left: 40px;
      	margin-bottom: 100px;
      	margin-top: 0px;
      	margin-top: 0px;
      	padding: 0px;


      }
      button[type="submit"]{
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
			/*background: url("paint_art_stripes_stains_117030_1920x1080.jpg");*/
			background-size: 100%;
			width: 140px;
			position:absolute; 
			border: none;
			outline: none;
			right: 160px;
			margin-top: 90px;
			padding: 20px;
			background: black;
			filter: opacity(80%);
			color: #fff;
			font-size: 16px;
			cursor: pointer;
			font-family: century gothic;
			font-weight: bold;
			border-radius: 30px;

		}
		.box2{

			text-align: center;
	        color: white;
	        width: 490px;
	      height: 550px;
	      background: rgba(0,0,0,.2);
	      color: #fff;

	      top:40%;
	      left: 35%;
	      position: absolute;
	      transform: translate(-50%,-50%);
	      box-sizing: border-box;
	      padding: 10px;
	      box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
	      font-family: tw cen mt;
	      font-size: 18px;
	      margin-top: 100px;	
		}
		.box input[type="text"]{
			border-radius: 15px 50px 30px; 
			box-shadow: inset 3px 4px 5px #000;
			outline: none;
			padding: 20px;
			font-size: 16px;
			margin-top: 0px;
		}
		#details{
			text-shadow:  2px 4px 5px #000;
			font-weight: bold;
			color: white;
	      	font-size: 30px;
	      	font-family: tw cen mt;
		}
		.nest{
			text-align: center;
	        color: white;
	        width: 300px;
	      height: 400px;
	      background: rgba(0,0,0,.7);
	      color: #fff;

	      top:45%;
	      left: 47%;
	      position: absolute;
	      transform: translate(-50%,-50%);
	      box-sizing: border-box;
	      padding: 30px;
	      box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
	      font-family: tw cen mt;
	      font-size: 20px;
	      margin-top: 50px;	
		}
		#tech{
			fontv-size: 28px;
		}
	</style>
<body>
	
    	<?php
	   //while($row = mysqli_fetch_assoc($result))
	   //{
	   	$techdata = mysqli_fetch_assoc($fetch);
	   	$row = mysqli_fetch_assoc($result);

	   	echo "<div class='box2'> ";
	   		echo "<p id='details'> Complain Details</p>";
	   		echo "<div class='nest'>";
	   	 echo "Complaint ID : ".$row['Comp_id']."<br><br>";
	   	  echo "Date of Complaint : ".$row['Date_Time']."<br><br>";
	   	echo "Room No : ".$row['Room_No']."<br><br>";
	   	  echo "Hostel Name : ".$row['Hostel_Name']."<br><br>";
	   	  echo "Mobile No. : ".$row['Mobile']."<br><br>";
	      echo "Complaint subject : ".$row['Sub_Category']."<br><br>";
	      echo "Complaint discription : ".$row['Description']."<br><br>";
	      echo "</div>";
	   	echo "</div>";

	   	echo "<p id='name'>Hey,<br> ".$row['Name']."</p><br>";
	   	  echo "<div class='box'>";
	   	 
	   	  
	   	  
          echo "<p id='tech'>Technician Name :<br> ".$techdata['Name']."</p><br>";
          echo "</box>";
	   	  $_SESSION['techname'] = $techdata['Name'];
	   //}
	?>
    <form method="GET" action="com_details_server.php">
    
   
	<input type="text" name="regcheck" placeholder="Registeration Number">
	
    <button type="submit" name = 'but'>DONE</button>
    </form>
</body>
</html>