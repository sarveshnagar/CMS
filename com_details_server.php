<?php
      session_start();
      $db = mysqli_connect('localhost', 'root', '', 'ourproject');
          $regno = $_GET['regcheck'];
          $id = $_SESSION['id'];
          $sql = "SELECT hcomplaints.Comp_id,Category,Sub_Category,Name,Room_No,Hostel_Name,Reg_No,Mobile,Description,Date_Time FROM stu_details INNER JOIN hcomplaints ON hcomplaints.Comp_id= stu_details.Comp_id WHERE hcomplaints.Comp_id = '$id' ";
          $result = mysqli_query($db,$sql);
          $row = mysqli_fetch_assoc($result);
          $iregno =  $row['Reg_No'];
          if($iregno == $regno)
          {
               $icat = $row['Category'];
               $isubcat = $row['Sub_Category'];
               $idesc = $row['Description'];
               $idate = $row['Date_Time'];
               $iname = $row['Name'];
               $ihname = $row['Hostel_Name'];
               $iroom = $row['Room_No'];
               $imobile = $row['Mobile'];
               $itechname = $_SESSION['techname'];
               $idate = date('Y-m-d');
               $isql = "INSERT INTO allhcomplaints(Comp_id,Comp_Date,Name,Hostel,Room_No,Reg_No,Mobile_No,Cmp_Cat,Cmp_Subcat,Cmp_Decs,Solved_By,Solve_Date)VALUES('$id','$idate','$iname','$ihname','$iroom','$iregno','$imobile','$icat','$isubcat','$idesc','$itechname','$idate')";
               mysqli_query($db,$isql);
               $dsql = "DELETE FROM hcomplaints WHERE Comp_id = '$id' ";
               mysqli_query($db,$dsql);
               $d2sql = "DELETE FROM stu_details WHERE Comp_id = '$id'";
               mysqli_query($db,$d2sql);
               header('Location:techTable.php');

          }
          else
          {
            echo '<script language="javascript">';
            echo 'alert("Wrong Registration Number")';
            echo '</script>'; 
            echo "<meta http-equiv='refresh' content='0;url=com_details.php?id=$id'>";
          }
?>