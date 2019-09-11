<?php
session_start();
$db = new PDO("mysql:host=127.0.0.1;dbname=ps_db;charset=utf8", "root", "", null);
date_default_timezone_set("Asia/Taipei");

//php轉址
function plo($link){
    return header("location:".$link);
}

  //JS轉址
function jlo($link){
    return "location.href='".$link."'";
}
?>
