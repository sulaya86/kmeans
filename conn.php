<?php 

//DB Connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "exchange";
try {
    $db = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e)  {
    echo $e->getMessage();
}
?>

