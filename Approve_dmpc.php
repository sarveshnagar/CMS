<?php 
       session_start();
            $db = mysqli_connect('localhost','root','','ourproject');
            $id =  $_GET["id"];
            $sql = "SELECT * FROM dept_complaint_details WHERE cmp_id = '$id' ";
            $records =mysqli_query($db, $sql);
            $record = mysqli_fetch_assoc($records);
            $cname = $record['name'];
            $cregno = $record['regno'];
            $cdept = $record['dept'];
            $ccmp_category = $record['cmp_category'];
            $ccmp_id = $record['cmp_id'];O
            $ccmp_desc = $record['cmp_desc'];
            $appby = 'DMPC';
            $date = date('Y-m-d H:i:s');
            //echo $cname,$cregno,$cdept,$ccmp_category,$ccmp_id,$ccmp_desc;

            $query = "INSERT INTO dapproved (ApprovedBy,Date_Time,cmp_id,name,regno,dept,cmp_category,cmp_desc)VALUES('$appby','$date','$ccmp_id','$cname','$cregno','$cdept','$ccmp_category','$ccmp_desc')";
            mysqli_query($db,$query);
            $sql = "DELETE FROM dept_complaint_details WHERE cmp_id = '$id' ";
            mysqli_query($db, $sql);
            $sqll = "UPDATE status SET c = 'Approved By DMPC' , c_date = '$date',main_status='Approved By DMPC' WHERE Comp_id = '$id' ";
            mysqli_query($db, $sqll);

            echo "<meta http-equiv='refresh' content='0;url=dudmpc_table.php?id=$ccmp_category'>";


?>