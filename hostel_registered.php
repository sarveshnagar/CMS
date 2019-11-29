
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="check mark success animation">
  <meta charset="utf-8">
  <title>Registered</title>
  <h1 style="background-color: gold;text-align: center;margin-top: 30px;font-family: tw cen mt">Note your complain ID for future reference</h1>
  <style type="text/css">
	  	body{
	      background-image: url("texture-wallpaper-58.jpg");
	      background-size: 50%;
	    }

  </style>
<style id="jsbin-css">
/* animations */

@-webkit-keyframes checkmark {
    0% {
        stroke-dashoffset: 50px
    }

    100% {
        stroke-dashoffset: 0
    }
}

@-ms-keyframes checkmark {
    0% {
        stroke-dashoffset: 50px
    }

    100% {
        stroke-dashoffset: 0
    }
}

@keyframes checkmark {
    0% {
        stroke-dashoffset: 50px
    }

    100% {
        stroke-dashoffset: 0
    }
}

@-webkit-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px
    }

    100% {
        stroke-dashoffset: 480px
    }
}

@-ms-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px
    }

    100% {
        stroke-dashoffset: 480px
    }
}

@keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px
    }

    100% {
        stroke-dashoffset: 480px
    }
}

/* other styles */
/* .svg svg {
    display: none
}
 */
.inlinesvg .svg svg {
    display: inline
}

/* .svg img {
    display: none
} */

.icon--order-success svg path {
    -webkit-animation: checkmark 0.25s ease-in-out 0.7s backwards;
    animation: checkmark 0.25s ease-in-out 0.7s backwards
}

.icon--order-success svg circle {
    -webkit-animation: checkmark-circle 0.6s ease-in-out backwards;
    animation: checkmark-circle 0.6s ease-in-out backwards
}
.box{
	text-align: center;
	margin-left: 420px;
	width: 600px;
	height: 396px;
	background: transparent;
	box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
}
button{
    box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
    width: 200px;
    height: 50px;
    text-align: center;
    font-family: tw cen mt;
    background: transparent;
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    cursor: pointer;
    font-weight: bold;
    background-color: #001233
}
</style>
</head>
<body>
	
	
	
	<div class="box" style="background: #ededed;" >
		<h1 style="color: black;padding: 50px;font-family: Tw cen mt;filter: opacity(80%);text-align: center;margin-top: 180px;font-size: 50px;text-shadow: inset 3px 4px 5px #000;padding-bottom: 0px;">Complain Registered</h1>

            
		<div class="icon icon--order-success svg" style="text-align: center; padding: 30px;"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
            <g fill="none" stroke="#8EC343" stroke-width="3" >
              <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
              <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
            </g>
          </svg>
        </div>	
       
		<p style="color: white;font-family: tw cen mt; font-size: 30px; text-align: center;padding: 30px;box-shadow : inset 3px 4px 6px #000;background-color: #001233">
            
			Your Complain Id is : 
			<?php  
				session_start();
				$var = $_GET['id'];
				echo $var; 
		 	?>	
            <div class="newcmp" style="padding-top: 0px; ">
                <a href="studentDetails.php"><button >New Complain?</button></a> </div>

		</p>
		
	</div>
	
	


<script id="jsbin-source-css" type="text/css">/* animations */

@-webkit-keyframes checkmark {
    0% {
        stroke-dashoffset: 50px
    }

    100% {
        stroke-dashoffset: 0
    }
}

@-ms-keyframes checkmark {
    0% {
        stroke-dashoffset: 50px
    }

    100% {
        stroke-dashoffset: 0
    }
}

@keyframes checkmark {
    0% {
        stroke-dashoffset: 50px
    }

    100% {
        stroke-dashoffset: 0
    }
}

@-webkit-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px
    }

    100% {
        stroke-dashoffset: 480px
    }
}

@-ms-keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px
    }

    100% {
        stroke-dashoffset: 480px
    }
}

@keyframes checkmark-circle {
    0% {
        stroke-dashoffset: 240px
    }

    100% {
        stroke-dashoffset: 480px
    }
}

/* other styles */
/* .svg svg {
    display: none
}
 */
.inlinesvg .svg svg {
    display: inline
}

/* .svg img {
    display: none
} */

.icon--order-success svg path {
    -webkit-animation: checkmark 0.25s ease-in-out 0.7s backwards;
    animation: checkmark 0.25s ease-in-out 0.7s backwards
}

.icon--order-success svg circle {
    -webkit-animation: checkmark-circle 0.6s ease-in-out backwards;
    animation: checkmark-circle 0.6s ease-in-out backwards
}

</script>
</body>
</html>
