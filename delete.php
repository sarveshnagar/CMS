<?php
       session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            $id =  $_GET["id"];
            $sql = "DELETE FROM dept_complaint_details WHERE cmp_id = '$id' ";
            mysqli_query($db, $sql);
            echo "<meta http-equiv='refresh' content='0;url=dudmpc_table.php?id=Ragging'>";
?>