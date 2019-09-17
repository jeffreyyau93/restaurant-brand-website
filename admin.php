<?php
include_once('sql.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400&display=swap&subset=chinese-traditional" rel="stylesheet">
    <link rel="stylesheet" href="css/aos.css">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="css/admin-style.css">
    <title>Pierre Stone Admin</title>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vw-100">
        <div class="w-100 d-flex justify-content-between align-items-center mb-3">
            <a href="#" class="p-3"><img src="img/pierre_stone_shorthand.svg" id="ps-sh" alt=""></a>
            <button type="button" class="btn btn-danger" onclick="document.cookie='user=';location.replace('api.php?do=logout')">管理登出</button>
        </div>
        <form action="api.php?do=admin" method="post" enctype="multipart/form-data">
            <table id="admin-table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>img</th>
                        <th>name</th>
                        <th>info</th>
                        <th>del</th>
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
                                <img src="<?= $row["img"] ?>" class="admin-img" alt="">
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
            <hr>
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
    </div>
    <script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $('#admin-table').DataTable();
    </script>
</body>

</html>
