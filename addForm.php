<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add supply</title>
</head>
<body>
    <form method="post" action="addProcess.php" id = "Addform" enctype="mulit.form-data" >
    
    ID : <input type = "text" name = "ID"> not null <br>
 
    RegistID : <input type = "text" name = "registID">  not null<br> 
    
    activeState : <input type="text" name = "activeState"> not null <br> 

    division : <input type = "text" name ="division"> not null <br>

    <!-- project : <input type = "text" name ="project"><br> -->

    <!-- Model : <input type = "text" name ="model"><br>
 
    brand : <input type = "text" name ="brand"><br>
 
    category : <input type = "text" name ="category"><br> -->

    <input type="submit" value ="Add">
 
    </form>
</body>
</html>
