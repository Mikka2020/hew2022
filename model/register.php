<?php

//ユーザーIDのフォルダに格納(ユーザID_現在時刻.jpg)
copy('./python/tmp/' . $file_name , '../users/' .$user_id. '/'. $user_id . '_' . date('YmdHis') . '.' . $ext);

// registersテーブルに投稿情報を格納する
$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID ,PASSWORD);
var_dump($db);
$db->exec("INSERT INTO registers(register_id , user_id , insect_id , shooting_date) VALUES ( " . $register_id . "," . $user_id . "," . $result[0]['index'] . ",NULL)");
$result = $db->query("SELECT * FROM `quests`;");
$quest_data_table = []; // questsテーブルに格納されている全データを取得
while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $quest_data_table[] = $row;
}
$db = null; // 終了