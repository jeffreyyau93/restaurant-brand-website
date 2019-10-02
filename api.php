<?php
  require_once('sql.php');

  if (!empty($_GET['do'])) { // 如果有GET這個do，做以下事情
    switch ($_GET['do']) {
      case 'check':
        print_r($_POST);
        $sql = "SELECT * FROM admin WHERE  acc='" . $_POST['acc'] . "' and pwd='" . $_POST['pwd'] . "'";
        $rows = $db->query($sql)->fetch();
        if ($rows) {
          $_SESSION['admin'] = $_POST['acc'];
          plo("admin.php");
        } else echo "<script>alert('帳號或密碼錯誤');" . jlo("login.php") . "</script>";
        break;
      case 'logout':
        unset($_SESSION['admin']);
        plo("index.php");
        break;
        // case 'select':
        // $sql = "SELECT * FROM ps_menu";
        // $rows = $db->query($sql)->fetchAll();
        // print_r($rows);
        // foreach ($rows as $row) {
        //     echo '
        //     <tr>
        //         <td>'.$row['id'].'</td>
        //         <td class="name">'.$row['img'].'</td>
        //         <td>'.$row['name'].'</td>
        //         <td>'.$row['info'].'</td>
        //         <td>'.$row['del']. '</td>
        //         <td>
        //             <button class="mdy">修改</button>
        //             <button>刪除</button>
        //         </td>
        //     </tr>
        //     ';
        // }
        break;
      case 'imagemdy':
        print_r($_POST);
        update($_POST, "t6_img");
        delete($_POST, "t6_img");
        plo("admin.php?do=aimage");
        break;
      case 'admin':
        print_r($_POST);
        print_r($_FILES);
        $name = md5_file($_FILES["img"]["tmp_name"][1]);
        $ext = pathinfo($_FILES["img"]["name"][1], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["img"]["tmp_name"][1], "./img/" . $name . "." . $ext);
        break;
    }
  }
?>
