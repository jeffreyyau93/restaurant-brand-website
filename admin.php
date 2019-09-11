<?php
include_once('api.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <button onclick="document.cookie='user=';location.replace('api.php?do=logout')" style="width:99%; margin-right:2px; height:50px;">管理登出</button>
</body>

</html>
