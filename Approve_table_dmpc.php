<!DOCTYPE html>
<html>
<title>Appoved Complaints</title>
<head>
	<header>
		<h1><a href="dmpc_table.php"><button class="btn2">←</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Appoved Complaints</h1>
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
		header{
			 background-image: url("grunge_texture_dark_126947_3840x2160.jpg");
        background-size: 100%;
			padding: 40px;
            box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
            font-family: azonix;
            font-size: 20px;
            color: #fff;
            text-shadow:  2px 4px 5px #000;
		}
        body{
            background-image: url("texture-wallpaper-58.jpg");
              background-size: 50%;
              box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
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
	</style>
</head>

<body>
      <div>
      	<p>  
      		<?php
      		session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            
            $sql = "SELECT * FROM dapproved";
            $records = mysqli_query($db,$sql);
            //$delete = "delete";
            //$hod = "HOD";
            //$Approve = "Approve";
     

            if(mysqli_num_rows($records) > 0)  
            {
            echo "<table id='a' cellpadding='0' cellspacing='0' border='0'>";
            echo "<tr id='headings'>";
            echo "<th>"."Approved By"."</th>";
            echo "<th>"."Date"."</th>";
            echo "<th>"."Comp_id"."</th>";
            echo "<th>"."Name"."</th>";
            echo "<th>"."Registration No"."</th>";
            echo "<th>"."Subject"."</th>";
            echo "<th id='desc'>"."Description"."</th>";
            //echo "<th colspan='2'>"."Action"."</th>";

            echo "</tr>";
           while($record = mysqli_fetch_assoc($records))
           {

            echo "<tr id='row'>";

            echo "<td>".$record['ApprovedBy']."</td>";
            echo "<td>".$record['Date_Time']."</td>";
            echo "<td>".$record['cmp_id']."</td>";
            echo "<td>".$record['name']."</td>";
            echo "<td>".$record['regno']."</td>";
            echo "<td>".$record['cmp_category']."</td>";
            echo "<td>".$record['cmp_desc']."</td>";
            //echo "<td>"."<a href='delete_hod.php?id=".$record['cmp_id']."'>".$delete."</a>"."</td>";
            //echo "<td>"."<a href='Approve_hod.php?id=".$record['cmp_id']."'>".$Approve."</a>"."</td>"; 
            echo "</tr>";

            }
            }
            else
            {
             echo "No Data";
             }
            ?>
        </p>
      </div>
</body>
</html>