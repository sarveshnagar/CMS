<!DOCTYPE html>
<html>
<head>
	<title>Technician or Student</title>
	<header>
		<h1 style=" color: white"><a href="front.php"><button class="btn2">←</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHOOSE&nbsp;YOUR&nbsp;IDENTITY</h1>
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
	    }
		 header{
		 	background-image: url("grunge_texture_dark_126947_3840x2160.jpg");
       		 background-size: 100%;
			/*background-color: black;*/
			padding: 50px;
			padding-bottom: 20px;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
			margin: 0px;
			font-family: Tw Cen MT;
			filter: opacity(90%);
			 font-family: azonix;
            font-size: 20px;
			text-shadow:  2px 4px 5px #000;
		}
		.tech{
			background: url("grunge_texture_dark_126947_3840x2160.jpg ");
      		background-size: 100%;
      		box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			/*text-shadow: 3px 8px 20px rgba(0, 0, 0, .9)*/
			margin-top: 190px;
			background-color: black;
			padding: 10px;
			margin-right: 600px;
			border-radius: 0px 0px 250px;
			filter: opacity(90%);
		}
		.tech:hover,.stud:hover{
			box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
		}
		.stud{
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			background: url("grunge_texture_dark_126947_3840x2160.jpg ");
      		background-size: 100%;
			margin-top: 60px;
			background-color:/* #662b4c*/ black;
			padding: 10px;
			margin-left: 600px;
			border-radius: 150px 0px 0px;
			filter: opacity(90%);	
		}
	</style>
</head>
<body>
	<a href="login_temp.php" style="text-decoration: none">
		<div class="tech">
			<p style="color: white; font-size: 30px; padding: 0px; font-family:alpaca scarlett demo;margin-left: 150px;" >Technician</p>
		</div>
	</a>
	<a href="studentDetails.php" style="text-decoration: none">
		<div class="stud" >
			<p style="color: white; font-size: 30px; padding: 0px;font-family:alpaca scarlett demo; margin-left: 150px;">Student</p>
		</div>
	</a>
</body>
</html>