<?php
       session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            $id =  $_GET["id"];
            $date = date('Y-m-d H:i:s');

            $sql = "DELETE FROM hod_complaint WHERE cmp_id = '$id' ";
            mysqli_query($db, $sql);
            $sqll = "UPDATE status SET d = 'Deleted By HOD', d_date = '$date',main_status = 'Deleted by HOD' WHERE Comp_id = '$id' ";
            mysqli_query($db, $sqll);
            echo "<meta http-equiv='refresh' content='0;url=hod_table.php'>";
             
?>