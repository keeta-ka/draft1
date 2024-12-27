<?php
require("connect.php");
$regID = isset($_GET['reg']) ? $_GET['reg']: '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add supply</title>
</head>
<body>
<?php
    if($regID!=''){
    $q = "SELECT * FROM supply where registID = "."'".$regID."'" ;
    $result = sqlsrv_query($conn,$q);
    $row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);

    // $row =$result->SQLSRV_FETCH_ASSOC();
} 
?>

    <form method="post" action="borrowProcess2.php" id = "brrform" enctype="mulit.form-data" >
    
    ID : <input type = "text" name = "ID"> not null <br>
 
    BorrowerID : <input type = "text" name = "BorrowerID">  not null<br> 
    
    activeState : <input type="text" name = "activeState"> not null <br> 

    division : <input type = "text" name ="division"> not null <br>

    Supply : <input type = "text" name ="supplyid" value="<?php echo $row['registID'];?>"> not null <br>


    <!-- project : <input type = "text" name ="project"><br> -->

    <!-- Model : <input type = "text" name ="model"><br>
 
    brand : <input type = "text" name ="brand"><br>
 
    category : <input type = "text" name ="category"><br> -->

    <input type="submit" value ="Add">
 
    </form>
</body>
</html>
