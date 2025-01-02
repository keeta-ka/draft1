<?php
require("connect.php");
// $conn->set_charset("utf8");

$ID_ = $_POST['id']; 
$BorrowerID_ = $_POST['borrowerID'];
$ActiveState_ = $_POST['activeState'];
$Division_ = $_POST['division'];
$SupplyID_ = $_POST['supplyID'];

// $model_ = $_POST['model'];
// $brand_ = $_POST['brand'];
// $category_ = $_POST['category'];
?>
<?php
// $q = "INSERT INTO  supply (id, registID, activeState,  division, model, brand, category) VALUES ('?', '?', '?', '?' ,?, ?,?)";

$q1 = "INSERT INTO  activity (id, borrowerID, activityState,  witness, docs) VALUES (?, ?, ?, ?, ?)";
$params1 = array("$ID_",$BorrowerID_,$ActiveState_,$Division_, $SupplyID_ );



// $result = sqlsrv_query($conn, $q2);
$stmt = sqlsrv_query($conn,$q1,$params1);

if($stmt ===false){
    echo "Data not insert";
    // header("location:index.php");
} else{
    echo "Data insert";
}

// if($result ===false){
//     echo "Data not insert";
//     // header("location:index.php");
// } else{
//     echo "Data insert";
// }
$q2 =  "UPDATE supply SET activeState = $ActiveState_ WHERE registID =   '".$SupplyID_."'   "; 
$stmt2 = sqlsrv_query($conn,$q2);

//close connection

sqlsrv_close($conn);
header("location:index.php");

?>