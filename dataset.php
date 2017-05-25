<?php 
require('conn.php');

//Retrieving Data
$first_value = '例假日';
$second_value = '無交易';

$stmt = $db->prepare("SELECT exchange_date,value FROM ntd_usd WHERE value != ? AND value != ? GROUP BY exchange_date ORDER BY id DESC");
$stmt->bindValue(1, $first_value, PDO::PARAM_STR);   
$stmt->bindValue(2, $second_value, PDO::PARAM_STR);   
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $key => $value) {

    $value['exchange_date'] = date("m",strtotime($value['exchange_date']));

    $dataset[$key][0]= (int)$value['exchange_date'];
    $dataset[$key][1] = (float)$value['value']; 
}

?>



