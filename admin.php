<?php
$dblink = new PDO("mysql:host=220.128.133.15;dbname=s1080208;charset=utf8", "root", "", null);
// <!-- http://220.128.133.15/PMA/sql.php?db=s1080208&table=pierre_stone&pos=0 -->

$result = $dblink->query("SELECT * FROM pierre_stone WHERE 1");

print_r($result);
?>
