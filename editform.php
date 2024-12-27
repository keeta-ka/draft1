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
$regID = isset($_GET['reg']) ? $_GET['reg']: '';


if($regID!=''){
    $q = "SELECT * FROM supply where registID = "."'".$regID."'" ;
    $result = sqlsrv_query($conn,$q);
    $row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);

    // $row =$result->SQLSRV_FETCH_ASSOC();
} 
?>



<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, accusantium?</h1>
<br>

<form method="post" id= "form" entrype="mulitpart/form-data" action="editprocess.php">

name : <input type = "text" name =model value="<?php echo $row['model'];?>"> <br> 
<input type="submit" value="update">

</form>
</body>
</html>