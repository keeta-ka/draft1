<?php
require("connect.php");
// $conn->set_charset("utf8");

$ID_ = $_POST['ID']; 
$BorrowerID_ = $_POST['BorrowerID'];
$activeState_ = $_POST['activeState'];
$division_ = $_POST['division'];
$SupplyID_ = $_POST['supplyid'];

?>
<?php

$q2 =  "UPDATE supply SET activeState = $activeState_ WHERE registID =   '".$SupplyID_."'   "; 
$stmt2 = sqlsrv_query($conn,$q2);

//close connection

sqlsrv_close($conn);
header("location:index.php");

?>