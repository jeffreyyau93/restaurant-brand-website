<?php
include_once('sql.php');
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
    <form action="api.php?do=admin" method="post" enctype="multipart/form-data">
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>img</td>
                    <td>name</td>
                    <td>info</td>
                    <td>del</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $rows = $db->query("SELECT * FROM `ps_menu`")->fetchAll();
                foreach ($rows as $row) {
                    ?>
                    <tr>
                        <td>
                            <?= $row["id"] ?>
                        </td>
                        <td>
                            <img src="<?= $row["img"] ?>" alt="">
                            <input type="file" name="img[<?= $row["id"] ?>]" id="">
                        </td>
                        <td>
                            <input type="text" name="name[<?= $row["id"] ?>]" value="<?= $row["name"] ?>">
                        </td>
                        <td>
                            <input type="text" name="info[<?= $row["id"] ?>]" value="<?= $row["info"] ?>">
                        </td>
                        <td>
                            <input type="text" name="del[<?= $row["id"] ?>]" value="<?= $row["del"] ?>">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <!-- 新增 -->
        <input type="file" name="newimg">
        <input type="text" name="newname">
        <input type="submit">
        <!-- 刪除 -->
        <?php
        $newname = 
        unlink("img/".$newname);
        ?>
        <input type="button" names="">
    </form>

</body>

</html>
