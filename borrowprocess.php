<?php
require("connect.php");
// $conn->set_charset("utf8");

$ID_ = $_POST['ID']; 
$regisID_ = $_POST['registID'];
$activeState_ = $_POST['activeState'];
$division_ = $_POST['witness'];

// $model_ = $_POST['model'];
// $brand_ = $_POST['brand'];
// $category_ = $_POST['category'];
?>
<?php

$q1 = "INSERT INTO  activity (id, borrowerID, activityState,  witness) VALUES (?, ?, ?, ?)";

$params1 = array("$ID_",$regisID_,$activeState_,$division_, );



// $result = sqlsrv_query($conn, $q2);
$stmt = sqlsrv_query($conn,$q1,$params1);

if($stmt ===false){
    echo "Data not insert";
    // header("location:index.php");
} else{
    echo "Data insert";
}



//close connection

sqlsrv_close($conn);
header("location:index.php");

?>