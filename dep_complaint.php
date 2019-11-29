<?php include('dep_comp_server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Department Complaint</title>
	<header>
		<h1 style=" color: white"><a href="dep_identity.php"><button class="btn3">←</button></a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R E G I S T E R&nbsp;&nbsp;&nbsp; Y O U R&nbsp;&nbsp;&nbsp;  C O M P L A I N T</h1>

	</header>
	<style type="text/css">
	.btn3{
    font-size: 30px;
    box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
    font-family: tw cen mt;
    background: transparent;
    cursor: pointer;
    color: white;
    font-weight: bold; 
    outline: none;
  }
		body{
		      background-image: url("texture-wallpaper-58.jpg");
		      background-size: 50%;
		      box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
	    }
	    .quote{
	    	background: url("grunge_texture_dark_126947_3840x2160.jpg");
      		background-size: 250%;
			width: 1000px;
			margin-top: 100px;
			position: absolute;
			text-align: center;
			text-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
		}
	    h1{
			
			padding: 50px;
			margin: 0px;
			background: url("grunge_texture_dark_126947_3840x2160.jpg");
      		background-size: 100%;
			font-family: azonix;
			text-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
			box-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
		}
		.box{
			background: url("grunge_texture_dark_126947_3840x2160.jpg");
      		background-size: 200%;
			width: 400px;
			height: 630px;
			color: #fff;
			top: 56%;
			left: 80%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
		}

		.box p{
			margin: 0;
			padding: 0;
			font-size: 20px;
			font-family: helvetica;
			padding-bottom: 5px;
		}
		.box select{
			width: 100%;
			margin-bottom: 20px;
			padding: 10px;
		}
		.box button[type="submit"]{
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
			/*background: url("paint_art_stripes_stains_117030_1920x1080.jpg");*/
			background-size: 100%;
			width: 140px;
			position:absolute; 
			border: none;
			outline: none;
			right: 120px;
			padding: 20px;
			background: black;
			filter: opacity(80%);
			color: #fff;
			font-size: 18px;
			cursor: pointer;
			font-family: century gothic;
			font-weight: bold;
			border-radius: 30px;
		}
		.btn2{
			margin-left: 20px;
			float: left;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			cursor: pointer;
			font-family: century gothic;
			font-weight: bold;
			border-radius: 30px;
			background: black;
			filter: opacity(80%);
			outline: none;
			padding: 10px;
			filter: opacity(80%);
			color: #fff;
			font-size: 18px;
			background-size: 100%;
			width: 140px;
			position:absolute; 
			border: none;
			margin-top:20px; 
		}
		.box input{
			margin-bottom: 20px;
			width: 100%;
		}
		.box input[type="text"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 60px;
			color: black;
			padding: 1px;
			height: 50px;
			font-size: 16px;
		}
        .desc input[type="text"]{
           border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 100px;
			color: #fff;
			font-size: 16px;	
        } 
        .status{
        	padding: 70px 30px;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
        	float: left;
        	margin-top: 300px;
        	background: url("grunge_texture_dark_126947_3840x2160.jpg");
      		background-size: 250%;
        }
	</style>
</head>
<body>
	<div class="quote">	

		<p style="font-family: sans-serif; text-transform: uppercase;letter-spacing: 2px;-webkit-text-fill-color:transparent; -webkit-text-stroke-width:2px;  color: white; font-size: 40px;filter: opacity(70%);">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your&nbsp; demand <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is&nbsp; our&nbsp; priority.
		</p>
	</div>
	<div class="status">
			<p style="font-family: Tw cen mt;font-size:20px; color: white;filter: opacity(70%);text-align: center; ">Check Status</p>
			<form method="GET" action="status.php" style="margin-bottom: 60px;">
				<input type="text" name="reg" placeholder="Enter Status" style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;outline: none;padding: 10px;">
				<button type="submit" id="myBtn" class="btn2" name="sub">Submit</button>
			</form>	
	</div>
<div class="box">
		<form method="post" action="dep_complaint.php">
         
        <p style="font-family: tw cen mt"> Student Enrollment ID:  </p>
        <input type="text" minlength="8" maxlength="8" name="regno" placeholder="Enter Reg. No." required style="background-color: white;border-radius: 15px;" > 
        <p style="font-family: tw cen mt">Student Name :</p>
		<input type="text" maxlength="20" name="name" placeholder="Enter Name" required style="background-color: white;border-radius: 15px;" >
		<p style="font-family: tw cen mt">Department: </p>
	  		<select name="dept" style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;outline: none;">
                <option value="CSE" >Computer Science And Engineering</option>
		  		<option value="ECE" >Electronics And Communication Engineering</option>
		  		<option value="EEE" >Electronics And Electrical Engineering</option>
		  		<option value="MECH">Mechanical</option>
		  		<option value="CIV" >Civil</option>
             </select>
         <p style="font-family: tw cen mt">Complain Category: </p>
	  		<select name="category" style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;outline: none;">
                <option value="Ragging" >Ragging</option>
		  		<option value="Attendence" >Attendence</option>
		  		<option value="Course" >Course</option>
		  		<option value="Teachers">Teachers</option>
		  		<option value="Canteen" >Canteen</option>
		  		<option value="Exam" >Exam</option>
		  		<option value="Others" >Others</option>		  		
             </select>
          <p style="font-family: tw cen mt">Complain Description: </p>
          <input type="text"  name="desc" maxlength="70"  placeholder="Enter Description Here" style="background-color: white;border-radius: 15px;" >
          <button type="submit" class="btn" name="proceed">Submit</button>       
		</form>
	</div>
</body>
</html>