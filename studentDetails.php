<?php include('studentServer.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<header>
		<h1 style=" color: white"><a href="hostel_opt.php"><button class="btn2">←</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E N T E R&nbsp;&nbsp;&nbsp; Y O U R&nbsp;&nbsp;&nbsp;  D E T A I L S</h1>
	</header>

	<style type="text/css">
	.btn2{
    font-size: 30px;
    box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
    font-family: tw cen mt;
    background: transparent;
    cursor: pointer;
    color: white;
    font-weight: bold;
    /*margin-bottom:30px; */
    outline: none;
  }
		body{
			 background-image: url("texture-wallpaper-58.jpg");
		      background-size: 50%;
		      box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
		}
		h1{
			background-image: url("grunge_texture_dark_126947_3840x2160.jpg");
        	background-size: 100%;
			/*background-color: black;*/
			padding: 50px;
			font-family: azonix;
			margin: 0px;
			box-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
			text-shadow: 3px 12px 20px rgba(0, 0, 0, .9);
			filter: opacity(90%);

		}
		.quote{
			background-image: url("4f6d052bb1b26150115888ea06d4c106.jpg");
        	background-size: 80%;
			top:40%;
			background-color: black;
			/*filter: opacity(90%);*/
			width: 1000px;
			position: absolute;
			text-align: center;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
		}
		.box{
			width: 400px;
			height: 650px;
			background-image: url("grunge_texture_dark_126947_3840x2160.jpg");
        	background-size: 200%;
        	transform: rotate(90deg);
			/*background: transparent;*/
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
			font-family: tw cen mt;
			padding-bottom: 5px;
		}
		.box select{
			width: 100%;
			margin-bottom: 20px;
			padding: 10px;
		}
		.box button[type="submit"]{
			box-shadow: 2px 10px 20px 5px rgba(0, 0, 0, .7);
			width: 200px;
			height: 50px;
			position:fixed; 
			border: none;
			outline: none;
			right: 100px; 
			padding: 0px;
			text-align: center;
			background: black;
			color: #fff;
			font-size: 15px;
			filter: opacity(80%);
			cursor: pointer;
			bottom: 30px;
			font-family: tw cen mt;
			font-weight: bold;
			border-radius: 30px;
			
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
			height: 5px;
			width: 270px;
			color: black;
			font-size: 16px;
			padding: 20px;
		}
	</style>
</head>
<body>
	<div class="quote">
		<p style="font-family: sans-serif; text-transform: uppercase;letter-spacing: 2px;-webkit-text-fill-color:transparent; -webkit-text-stroke-width:2px;  color: white; font-size: 40px;filter: opacity(70%);">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your&nbsp; demand <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is&nbsp; our&nbsp; priority.
		</p>
	</div>
	<div class="box">
		<script type="text/javascript">
			function mess(argument) {
				alert("Complain Registered");
				// body...
			}
		</script>
		<form method="post" action="studentDetails.php">

			<p>Hostel Name: </p>
	  		<select name="hostel">

		  		<option value="Tilak" >Tilak</option>
		  		<option value="Malviya">Malviya</option>
		  		<option value="Tondon" >Tondon</option>
		  		<option value="Patel" >Patel</option>
		  	</select>

		  	<p>Room No. :</p>
		  	<input type="text" name="room" minlength="1" maxlength="3" placeholder="Room No." required  style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000; background-color: white;color: black;">
		  	<p>Name :</p>
		  	<input type="text" maxlength="20" name="name" placeholder="Enter Name" required style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000; background-color: white;color: black;">
		  	<p>Registration No.</p>
		  	<input type="text" minlength="8" maxlength="8" name="regno" placeholder="Enter Reg. No." required style="background-color: white;border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;">
		  	<p>Mobile Number</p>
		  	<input type="text" minlength="10" maxlength="10" name="mobile" placeholder="Enter Mobile No." required style="background-color: white;border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;">

	  		<button type="submit" class="btn" name="proceed" ">PROCEED</button>
		</form>
	</div>
</body>
</html>