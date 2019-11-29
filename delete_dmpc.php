<?php
       session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            $id =  $_GET["id"];
            $date = date('Y-m-d H:i:s');
            $adi = "SELECT * FROM dept_complaint_details where cmp_id = '$id'" ;
            $records = mysqli_query($db,$adi);
            $record = mysqli_fetch_assoc($records);
            $cat = $record['cmp_category'];
            $sql = "DELETE FROM dept_complaint_details WHERE cmp_id = '$id' ";
            mysqli_query($db, $sql);
            $sqll = "UPDATE status SET c = 'Deleted By DMPC' , c_date = '$date',main_status = 'Deleted by DMPC' WHERE Comp_id = '$id' ";
            mysqli_query($db, $sqll);
            echo "<meta http-equiv='refresh' content='0;url=dudmpc_table.php?id=$cat'>";
             
?>