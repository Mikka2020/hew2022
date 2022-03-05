<?php
// 初期化
$_POST['login_id'] = '';
$_POST['password'] = '';
$_POST['mail'] = '';
$_POST['birth_day'] = '';
/** 格納する値
 * $_POST['login_id'];
 * $_POST['password'];
 * $_POST['mail'];
 * $_POST['birth_day'];
 */

// usersテーブルに値を格納し全件取得する
$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8',USER_ID,PASSWORD);
$db->exec("INSERT INTO 'users' ('login_id' , 'password' , ' mail' , 'birth_day') VALUES ('" . $_POST['login_id'] . "','" . $_POST['password'] . "','" . $_POST['mail'] . "','" . $_POST['birth_day'] . "')");
$result = $db->query("SELECT * FROM `users`;");
$user_data_table = []; // userテーブルに格納されたいる全データを取得
while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $user_data_table[] = $row;
}
$db = null; // 終了