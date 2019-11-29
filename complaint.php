<?php include('server.php') ?>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<header>
		<h1 style=" color: white"><a href="studentDetails.php"><button class="btn2">←</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R E G I S T E R&nbsp;&nbsp;&nbsp; Y O U R&nbsp;&nbsp;&nbsp;  C O M P L A I N T</h1>

	</header>
	<script>
		function populate(s1,s2){
			var s1 = document.getElementById(s1);
	        var s2 = document.getElementById(s2);
	        var optionArray;
	        s2.innerHTML = "";
		
		if(s1.value == "Civil")
		{
		optionArray = ["|","Window|Window","Door|Door","Furniture|Furniture","Wardrow|Wardorw"];
	    } 
	    else if(s1.value == "Electrical"){
		optionArray = ["|","Fan|Fan","Light|Light","Lan|Lan"];}
		for(var option in optionArray)
		{
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	    }
	}

	</script>
	<!-- <link rel="stylewsheet" type="text/css" href="complaint.css"> -->
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
    }
    	/*#myVideo {
		    position: fixed;
		    right: 0;
		    bottom: 0;
		    min-width: 100%; 
		    min-height: 100%;
			}*/
		.quote{
			background-image: url("4f6d052bb1b26150115888ea06d4c106.jpg");
        	background-size: 80%;
			
			background-color: black;
			/*filter: opacity(90%);*/
			width: 1000px;
			position: absolute;
			text-align: center;
			box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
		}
		h1{
			background-image: url("grunge_texture_dark_126947_3840x2160.jpg");
        	background-size: 100%;
			/*background-color: black;*/
			padding: 50px;
			box-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
			text-shadow: 3px 12px 20px rgba(0, 0, 0, .9);
			font-family: azonix;
			margin: 0px;
			filter: opacity(90%);
		}
		.box{
			background: url("grunge_texture_dark_126947_3840x2160.jpg");
			background-size: 250%;
			transform: rotate(90deg);
			width: 370px;
			height: 500px;
			/*background: transparent;*/
			color: #fff;
			top: 50%;
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
		.box input{
			margin-bottom: 20px;
			width: 100%;
		}
		.box input[type="text"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 100px;
			color: black;
			font-size: 16px;
			padding: 20px;
		}
	</style>
</head>
<body>
  	<br><br><br><br><br>
  	  	<!-- <video autoplay muted loop id="myVideo">
  			<source src="4k background footage (ideal for Blockchain Website) - YouTube.mkv" type="video/mp4">
		</video> -->

	<div class="quote">
		<p style="font-family: sans-serif; text-transform: uppercase;letter-spacing: 2px;-webkit-text-fill-color:transparent; -webkit-text-stroke-width:2px;  color: white; font-size: 40px;filter: opacity(70%);">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your&nbsp; demand <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is&nbsp; our&nbsp; priority.
		</p>
	</div>
  	<div class="box">
  		
  		<form method="post" action="complaint.php">

  			<p>Category:</p>
		  	<select id="category" name="category" onchange="populate(this.id,'sub_category')" required="Y" style="border-radius: 15px 50px 30px; box-shadow: inset 3px 4px 5px #000;outline: none;">

		  		<option value="Civil" >Civil</option>
		  		<option value="Electrical">Electrical</option>
		  	</select>
		  	<p>Sub Category</p>
		  	<select id = "sub_category" name="sub_category" required="Y" style="border-radius: 15px 50px 30px;box-shadow: inset 3px 4px 5px #000;outline: none;"></select></select>
		  	<p>Description:</p>
		  	<input type="text" maxlength="70"  name="description" placeholder="Enter description" required="Y"
		  		style="background-color: white;border-radius: 15px;" >
  	  		<button type="submit"  class="btn" name="comp_sub">Register</button>

		</form>	

  	</div>
</body>
</html>