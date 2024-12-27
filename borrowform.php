<?php
require("connect.php");
$regID = isset($_GET['reg']) ? $_GET['reg']: '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow</title>
</head>
<body>
    <form>
        <?php
    if($regID!=''){
    $q = "SELECT * FROM supply where registID = "."'".$regID."'" ;
    $result = sqlsrv_query($conn,$q);
    $row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);

    // $row =$result->SQLSRV_FETCH_ASSOC();
} 
?>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, accusantium?</h1>
<br>

<form method="post" id= "form" entrype="mulitpart/form-data" action="borrowprocess.php">

ID : <input type = "text" name =id >not null <br> 
BorrowID :<input type="text" name =BorrowID value="<?php echo $row['registID'];?>">not null <br> 
witness :<input type="text" name =witness >not null <br> 
activityState : <input type="text" name=>not null <br>

<input type="submit" value="ยืม">

</form>


    </form>
</body>
</html>