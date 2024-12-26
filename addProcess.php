<?php
require("connect.php");
// $conn->set_charset("utf8");

$ID_ = $_POST['ID']; 
$regisID_ = $_POST['registID'];
$activeState_ = $_POST['activeState'];
$division_ = $_POST['division'];

// $model_ = $_POST['model'];
// $brand_ = $_POST['brand'];
// $category_ = $_POST['category'];
?>
<?php
// $q = "INSERT INTO  supply (id, registID, activeState,  division, model, brand, category) VALUES ('?', '?', '?', '?' ,?, ?,?)";

$q1 = "INSERT INTO  supply (id, registID, activeState,  division) VALUES (?, ?, ?, ?)";

// $q2 = "INSERT INTO  supply (id, registID, activeState,  division) VALUES ($ID_, $regisID_, $activeState_, $division_)";



// prepate the query
// $params = array($model_,$regisID_,$activeState_,$division_, $model_,$brand_,$category_);

$params1 = array("$ID_",$regisID_,$activeState_,$division_, );
// $params2 = array($model_,$regisID_,$activeState_,$division_, );



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


//close connection

sqlsrv_close($conn);
header("location:index.php");

?>