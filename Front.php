<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<header>
		<img src="MNNIT.png" width="200px" height="260px" style="float: left; margin: 0px;padding: 0px; position: absolute; top: 5% ">
		<h1 style="letter-spacing: 10px; text-shadow: 3px 12px 20px rgba(0, 0, 0, 1);text-align: center; color: white;margin-left: 190px;">MNNIT COMPLAINT <br><br> MANAGEMENT</h1>
	</header>
	<style type="text/css">
		html {
			  scroll-behavior: smooth;
			}
		body{
		      background-image: url("texture-wallpaper-58.jpg");
		      background-size: 50%;
		      box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
	    }
		 header{
		 	 background: url("grunge_texture_dark_126947_3840x2160.jpg");
      		background-size: 100%;
			padding: 30px;
			font-size: 30px;
			margin: 0px;
			font-family: azonix;
			font-weight: bold;
			box-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
		}
		/*img{
			margin-left: 530px;	
		}*/
		.hostel{
			background: url("grunge_texture_dark_126947_3840x2160.jpg ");
      		background-size: 100%;
      		box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			margin-top: 120px;
			/*background-color: black;*/
			padding: 10px;
			margin-right: 600px;
			border-radius: 0px 0px 250px;
			filter: opacity(90%);
			text-shadow: 3px 12px 20px rgba(0, 0, 0, 1)
		}
		.hostel:hover,.dept:hover{
			box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
		}
		.dept{
			background: url("grunge_texture_dark_126947_3840x2160.jpg ");
      		background-size: 100%;
			margin-top: 60px;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
			/*background-color: #662b4c #7cdb0a;*/
			padding: 10px;
			margin-left: 600px;
			border-radius: 150px 0px 0px;
			text-shadow: 3px 12px 20px rgba(0, 0, 0, 1)	
		}
		.about{
			margin-top: 100px;
			background: url("grunge_texture_dark_126947_3840x2160.jpg");
      		background-size: 100%;
			box-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
		}
		button{
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
			/*background: url("paint_art_stripes_stains_117030_1920x1080.jpg");*/
			background-size: 100%;
			width: 140px;
			position:absolute; 
			border: none;
			outline: none;
			padding: 20px;
			background: black;
			filter: opacity(80%);
			color: #fff;
			font-size: 18px;
			cursor: pointer;
			font-family: century gothic;
			font-weight: bold;
			border-radius: 30px;
			top:70%;
			right: 45%;
		}
	</style>
</head>
<body>
	<a href="hostel_opt.php" style="text-decoration: none">
		<div class="hostel">
			<p style="color: white; font-size: 30px; padding: 0px; font-family:alpaca scarlett demo;margin-left: 150px;" >Complain related to Hostel</p>
		</div>
	</a>
	<a href="dep_identity.php" style="text-decoration: none">
		<div class="dept" >
			<p style="color: white; font-size: 30px; padding: 0px;font-family:alpaca scarlett demo; margin-left: 150px;">Complain related to Department</p>
		</div>
	</a>
	<div class="about">
		<h1 style="letter-spacing: 10px; text-shadow: 3px 12px 20px rgba(0, 0, 0, 1);text-align: center; color: white;font-family: azonix;padding: 100px;">To know about my makers click below
			<a href="aboutus.php"><button type="submit" class="btn" name="comp_sub" style="margin-top: 480px;">About Us</button></a>
		</h1>
		
	</div>
</body>
</html>