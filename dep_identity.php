<!DOCTYPE html>
<html>
<head>
	<title>Admin or Student</title>
	<header>
		<h1 style=" color: white"><a href="front.php"><button class="btn2">←</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C H O O S E&nbsp;&nbsp;&nbsp; Y O U R&nbsp;&nbsp;&nbsp;  I D E N T I T Y</h1>
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
		    margin-bottom:30px; 
		    outline: none;
		  }
		body{
		       background-image: url("texture-wallpaper-58.jpg");
		      background-size: 50%;
		      box-shadow: inset 3px 10px 20px rgba(0, 0, 0, .9);
	    }
		 header{
		 	padding-bottom: 20px;
		 	 background: url("grunge_texture_dark_126947_3840x2160.jpg");
      		background-size: 100%;
			font-family: azonix;
			box-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
			padding: 50px;
			margin: 0px;
			text-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
		}
		.stud{
			background: url("grunge_texture_dark_126947_3840x2160.jpg ");
      		background-size: 100%;
      		box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			margin-top: 120px;
			padding: 10px;
			margin-right: 600px;
			border-radius: 0px 0px 250px;
		}
		.dmpc{
			background: url("grunge_texture_dark_126947_3840x2160.jpg ");
      		background-size: 100%;
      		box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			margin-top: 60px;
			padding: 10px;
			margin-right: 600px;
			border-radius: 0px 0px 250px;
		}
		.hod:hover,.stud:hover,.dmpc:hover{
			box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
		}
		.hod{
			background: url("grunge_texture_dark_126947_3840x2160.jpg ");
      		background-size: 100%;
      		box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			margin-top: 60px;
			padding: 10px;
			margin-left: 600px;
			border-radius: 150px 0px 0px;
		}
	</style>
</head>
<body>
	<a href="dep_complaint.php" style="text-decoration: none">
		<div class="stud">
			<p style="color: white; font-size: 30px; padding: 0px; font-family:alpaca scarlett demo;margin-left: 150px;" >Student</p>
		</div>
	</a>
	<a href="hod_login.php" style="text-decoration: none;">
		<div class="hod">
			<p style="color: white; font-size: 30px; padding: 0px;font-family:alpaca scarlett demo; margin-left: 150px;">HOD</p> 
		</div>	
	</a>
	<a href="dmpc_login.php" style="text-decoration: none;">
		<div class="dmpc">
			<p style="color: white; font-size: 30px; padding: 0px;font-family:alpaca scarlett demo; margin-left: 150px;">DMPC</p> 
		</div>	
	</a>		
</body>
</html>