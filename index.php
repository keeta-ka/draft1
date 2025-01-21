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


<?php
        $q = "select * from supply where activeState = '1' ORDER BY 'registID' " ;
        $result = sqlsrv_query($conn,$q);
   ?>    
   <p>รายชื่อพัสดุยืมได้ <b><u>(dynamic)</u></b></p>

    <div>
   <table border="1" >
   
<thead>
   <tr>
   <th>ลำดับ</th>

   <!-- <th>ลำดับ</th> -->
        <th>RegistID</th>
        <th>model</th>
        <th>category</th>
        <th>สถานะพัสดุ</th>

    </tr>
</thead>

<?php 
    $num = 0;
    while($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC))
    {

?>

    <tr>
    <td> <?php echo $num+=1; ?> </td>

    <td><?PHP echo $row['registID']; ?></td>
    <td><?PHP echo $row['model']; ?></td>
    <td><?PHP echo $row['category']; ?></td>
    <td><?PHP echo $row['activeState']; ?></td>
    <td><a href="editform.php?reg=<?php echo $row["registID"];?>">edit</a></td>
    <td><a href="borrowform2.php?reg=<?php echo $row["registID"];?>">ยืม</a></td>
    <!-- <td><a href="#>">คืน</a></td> -->


    
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

<p>รายชื่อพัสดุที่ถูกยืม.<u><b>(dynamic)</b></u></p>
<?php
        $q1 = "select * from supply where activeState != '1' ORDER BY 'registID' " ;
        $result1 = sqlsrv_query($conn,$q1);
   ?>    
    <div>
   <table border="1" >
   
   <thead>
   <tr>
        <th>ลำดับ</th>
        <th>RegistID</th>
        <th>model</th>
        <th>category</th>
        <th>สถานะพัสดุ</th>

    </tr>
</thead>
<?php 
    $num1 = 0;
    while($row1 = sqlsrv_fetch_array($result1,SQLSRV_FETCH_ASSOC))
    {
?>
    <tr>
    <td><?php echo $num1 +=1;?></td>
    <td><?PHP echo $row1['registID']; ?></td>
    <td><?PHP echo $row1['model']; ?></td>
    <td><?PHP echo $row1['category']; ?></td>
    <td><?PHP echo $row1['activeState']; ?></td>
    <td><a href="returnform.php?reg1=<?php echo $row1['registID'];?>">คืน</a></td>

    </tr>

<?PHP
    }
?>

</table>
    </div>

    <p>ประวัติรายการยืม <b><u>(static)</u></b></p>
<?php
        $q2 = "select * from activity where activityState != '1' ORDER BY 'id' " ;
        $result2 = sqlsrv_query($conn,$q2);
   ?>    
    <div>
   <table border="1" >
   
   <thead>
   <tr>
        <th>ลำดับ</th>
        <th>รายชื่อผู้ยืม</th>
        <th>รายชื่อสังกัด</th>
        <th>สถานะการยืม</th>
        <th>เลขที่พัสดุ</th>


    </tr>
</thead>
<?php 
$num2 = 0;
    while($row2 = sqlsrv_fetch_array($result2,SQLSRV_FETCH_ASSOC))
    {
?>
    <tr>
    <td><?php echo $num2 +=1;?></td>
    <td><?PHP echo $row2['borrowerID']; ?></td>
    <td><?PHP echo $row2['witness']; ?></td>
    <td><?PHP echo $row2['activityState']; ?></td>
    <td><?PHP echo $row2['docs']; ?></td>
    </tr>

<?PHP
    }
?>

</table>
    </div>

</body>
</html>
