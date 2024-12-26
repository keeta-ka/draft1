<?php
// phpinfo();

$serverName = 'localhost';
$databaseName= 'fpo_supply';
$usernName = 'sa';
$password = 'p@ss';

//connection option


$connectionOption = array(
    "Database" => $databaseName,
    'Uid' =>$usernName,
    'PWD' =>$password,
    'MultipleActiveResultSets'=>true,
    'TrustServerCertificate' =>true,
    "CharacterSet" => "UTF-8"
);

// estiblish connection
$conn = sqlsrv_connect($serverName,$connectionOption);


if($conn == false){
    echo 'fail';
}
else{
    echo "connect good";
}

?>
!
