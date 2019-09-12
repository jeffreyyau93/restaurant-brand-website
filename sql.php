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

//update SQL
function update($ary, $tb){
  global $db;
  foreach ($ary as $do => $data) {
    switch($do){
    case 'num+1':
      $db->query("UPDATE ".$tb." SET num=num+1 WHERE id=".$data);
    break;
    case 'num-1':
      $db->query("UPDATE ".$tb." SET num=num-1 WHERE id=".$data);
    break;
    default:
      foreach($data as $key=>$value){ //$do為欄位名稱,$key為索引id,$value為新值
          $db->query("UPDATE ".$tb." SET ".$do."='".$value."' WHERE id=".$key);
          /* ary demo like this can be update query!
          echo "UPDATE " . $tb . " SET " . $do . "='" . $value . "' WHERE id=" . $key;
          print "<br>";
          Array
          (
              [text]=>Array
                  (
                      [1]=>卓越科技大學校園資訊系統
                      [2]=>卓越科技大學校園資訊系統
                      [3]=>卓越科技大學校園資訊系統
                      [4]=>卓越科技大學校園資訊系統
                      [5]=>AA
                      [6]=>BB
                      [7]=>CC
                  )

              [dpy]=>Array
                  (
                      [1]=>0
                      [2]=>0
                      [3]=>0
                      [4]=>0
                      [5]=>0
                      [6]=>0
                      [7]=>1
                  )
          )
          */
      }
    break;
    }
  }
}

?>
