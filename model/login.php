<?php
// 初期化
if (empty($_POST['login_id'])) {
  $_POST['login_id'] = '';
}
if (empty($_POST['password'])) {
  $_POST['password'] = '';
}
/** 格納する値
 * $_POST['login_id'];
 * $_POST['password'];
 */

$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8',USER_ID,PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$result = $db->query("SELECT * FROM `users`;");
$user_list = [];
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $user_list[] = $row;
}
$db = null;

for ($i=0; $i <count($user_list) ; $i++) { 
  if ($user_list[$i]['login_id'] == $_POST['login_id']) { // ログインIDの一致
    if ($user_list[$i]['password'] == $_POST['password']) { // パスワードの一致
      // ログインIDとパスワード両方の一致
      setcookie('user_id',$user_list[$i]['user_id']);
    }
  }
}