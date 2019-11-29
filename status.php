<?php
       session_start();
       $db = mysqli_connect('localhost','root','','ourproject');
       $id = $_GET['reg'];
       $fetch  = mysqli_query($db,"SELECT * FROM alldcomplaints WHERE Comp_id = '$id' ");
       
       $sql = "SELECT * FROM status WHERE Comp_id = '$id' ";
       $records = mysqli_query($db,$sql);
       //$record = mysqli_fetch_assoc($records);

?>
<html>
<head>
  <header>
    <h1><a href="dep_complaint.php"><button class="btn3">←</button></a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Status</h1>
  </header>
  <title>Current Status</title>
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
       header{
        background-image: url("grunge_texture_dark_126947_3840x2160.jpg");
        background-size: 100%;
            /*background-color: transparent;*/
            filter: opacity(90%);
            padding: 40px;
            box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);
            font-family: azonix;
            font-size: 20px;
            color: #fff;
            text-shadow:  2px 4px 5px #000;
        }
      .box{
          background-image: url("grunge_texture_dark_126947_3840x2160.jpg");
        background-size: 160%;
        /*color: white;*/
        width: 400px;
      height: 350px;
      /*background: rgba(0,0,0,.2);*/
      color: #fff;
      top:30%;
      left: 80%;
      position: absolute;
      transform: translate(-50%,-50%);
      box-sizing: border-box;
      padding: 70px 30px;
      box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
      font-family: tw cen mt;
      font-size: 18px;
      margin-top: 160px;
      }
      body{
      background-image: url("texture-wallpaper-58.jpg");
      background-size: 50%;
      }
       table{
            margin-top: 60px;
            background: transparent;
            /*box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .7);*/
            width: 50%;
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
            font-size: 20px;
            vertical-align: middle;
        }
      #name{
        color: black;
        background: white;
        margin-top: 0px;
      }
      h3{
        background: gold;
        color: black;
      }
  </style>   
</head>
<body>
      <?php
            $row = mysqli_fetch_assoc($fetch);
            $record = mysqli_fetch_assoc($records);
          echo "<div class='box'>";
           echo "<h1 id='name'>".$row['Name']."</h1><br>";
           echo "Registration No. : ".$row['Reg_No']."<br>";
           echo "Department : ".$row['Dept']."<br>";
           echo "Complain subject : ".$row['Subject']."<br>";
           echo "Description : ".$row['Cmp_desc']."<br>";
           echo "<h3>Complain status : ".$record['main_status']."</h3><br>" ;
           echo "</div>";
           

           echo "<table id='a' cellpadding='0' cellspacing='0' border='0'>";
           echo "<tr id='headings'>";
           echo "<th>"."Order Status"."</th>";
           echo "<th>"."Last Update"."</th>";
           echo "</tr>";
           echo "<tr>";
           echo "<td>".$record['a']."</td>";
           echo "<td>".$record['a_date']."</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td>".$record['b']."</td>";
           echo "<td>".$record['b_date']."</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td>".$record['c']."</td>";
           if($record['c_date']=='0000-00-00')
                        { echo "<td>" ." ". "</td>"; }
                        else 
                         {echo "<td>".$record['c_date']."</td>";}
           echo "</tr>";
           echo "<tr>";
           echo "<td>".$record['d']."</td>";
           if($record['d_date']=='0000-00-00')
                        { echo "<td>" ." ". "</td>"; }
                        else 
                         {echo "<td>".$record['d_date']."</td>";}
           echo "</tr>";
      ?>
</body>
</html>