<?php
require('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <?php
$regID_ = isset($_GET['reg1']) ? $_GET['reg1']: '';


if($regID_!=''){
    $q = "SELECT * FROM supply where registID = "."'".$regID_."'" ;
    $result = sqlsrv_query($conn,$q);
    $row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);

    // $row =$result->SQLSRV_FETCH_ASSOC();
} 
?>



<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, accusantium?</h1>
<br>

<form method="post" id= "form" entrype="mulitpart/form-data" action="returnprocess.php">

SupplyID : <input type = "text" name =supplyid value="<?php echo $row['registID'];?>"> <br> 
name : <input type = "text" name =model value="<?php echo $row['model'];?>"> <br> 
Activate State : <input type = "text" name =activeState value="<?php echo $row['activeState'];?>"> <br> 

<input type="submit" value="return">

</form>
</body>
</html>