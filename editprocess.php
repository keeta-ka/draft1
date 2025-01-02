<?php
    

require("connect.php");
$Model_ = $_POST['model'];
$RegistID_ = $_POST['supplyid'];

    // echo $Model_. "xxx";
    // echo $RegistID_. "xx";


$q = "UPDATE supply SET model = '".$Model_."' WHERE registID = '".$RegistID_."' "; 
$stmt = sqlsrv_query($conn,$q);

// echo $q;
// $q2 =  "UPDATE supply SET activeState = $activeState_ WHERE registID =   '".$SupplyID_."'   "; 
// $stmt2 = sqlsrv_query($conn,$q2);

//close connection

sqlsrv_close($conn);
header("location:index.php");

?>
