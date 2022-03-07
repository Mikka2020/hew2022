<?php

// テスト用ログイン
$register_id = 1;
$user_id = 1;

//選択された虫ID
$_SESSION['insect_id'] = $_POST['radio'];
//画像の拡張子
$ext = $_SESSION['ext'];

//元からある画像を取得
$folder = glob('../users/' . $user_id . '/' .$user_id. '_' . $_SESSION['insect_id'] . '_{*.jpg,*.jpeg,*.png,*.gif,*.JPG,*.JPEG,*.PNG,*.GIF}', GLOB_BRACE);
//元から存在する画像数
$photo_cnt = count($folder) + 1;
//新しく作成する画像名
$_SESSION['new_filename'] = $user_id . '_' . $_SESSION['insect_id'] . '_' . $photo_cnt . '.' . $ext;

//ユーザーIDのフォルダに格納(ユーザID_虫ID_枚数.jpg)
copy('../model/python/tmp/' . $_SESSION['file_name'], '../users/' .$user_id. '/'. $_SESSION['new_filename']);
//tmpフォルダの画像を削除
unlink('../model/python/tmp/' . $_SESSION['file_name']);

// registersテーブルに投稿情報を格納する
$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
var_dump($db);
$db->exec("INSERT INTO registers(register_id , user_id , insect_id , shooting_date , ext) VALUES ( " . $register_id . "," . $user_id . "," . $_SESSION['insect_id'] . ",NULL,'" . $ext . "');");
$result = $db->query("SELECT * FROM `quests`;");
$quest_data_table = []; // questsテーブルに格納されている全データを取得
while ($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $quest_data_table[] = $row;
}
$db = null; // 終了

header('location: insect_register_result.php');