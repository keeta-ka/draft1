<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html"; charset="tis-620">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ggg</title>
<!-- 
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:100%;
   }
   td,th {
    border: 1px solid #dddddd;
    width:100%;
   }
   tr:nth-child(even){
        background-color: #dddddd;
   }
   </style> -->
</head>
<body>
<!-- WHERE Country='Mexico'; -->

<?php
        $q = "select * from supply where activeState = '1' ORDER BY 'registID' " ;
        $query = sqlsrv_query($conn,$q);
   ?>    
   <p>รายชื่อพัสดุยืมได้</p>

    <div>
   <table border="1" >
   
<thead>
   <tr>
        <th>รายชื่อพัสดุ ยืมได้</th>
        <th>รายชื่อพัสดุ ยืมได้</th>
        <th>รายชื่อพัสดุ ยืมได้</th>
        <th>รายชื่อพัสดุ ยืมได้</th>
        <th>รายชื่อพัสดุ ยืมได้</th>

    </tr>
</thead>
<?php 
    while($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
    {
?>
    <tr>
    <td><?PHP echo $result['registID']; ?></td>
    <td><?PHP echo $result['model']; ?></td>
    <td><?PHP echo $result['category']; ?></td>
    <td><?PHP echo $result['activeState']; ?></td>
    <td><a href="add.php?id= <?php echo $row["id"];?>">edit</a></td>
    <td><a href="borrow.php?id= <?php echo $row["id"];?>">ยืม</a></td>

    
</tr>

<?PHP
    }
?>

</table>
    </div>
<div>
<a href="addForm.php">เพิ่มพัสดุ</a>
</div>
<br>

<p>รายชื่อพัสดุยืมได้ไม่ได้.</p>
<?php
        $q = "select * from supply where activeState != '1' ORDER BY 'registID' " ;
        $query = sqlsrv_query($conn,$q);
   ?>    
    <div>
   <table border="1" >
   
   <thead>
   <tr>
        <th>รายชื่อพัสดุ ยืมได้</th>
        <th>รายชื่อพัสดุ ยืมได้</th>
        <th>รายชื่อพัสดุ ยืมได้</th>
        <th>รายชื่อพัสดุ ยืมได้</th>
        <th>รายชื่อพัสดุ ยืมได้</th>

    </tr>
</thead>
<?php 
    while($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
    {
?>
    <tr>
    <th><?PHP echo $result['registID']; ?></th>
    <th><?PHP echo $result['model']; ?></th>
    <th><?PHP echo $result['category']; ?></th>
    <th><?PHP echo $result['activeState']; ?></th>
    </tr>

<?PHP
    }
?>

</table>
    </div>

</body>
</html>
