<?php
// registersテーブルに投稿情報を格納する
$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8',USER_ID,PASSWORD);
// $db->exec("INSERT INTO 'registers' ('register_id' , 'user_id' , 'insect_id' , 'registered_at' , 'taked_at') VALUES ('" . $register_id . "','" . $user_id . "','" . $result[0]['index'] . "','" . NULL . "','" . NULL . "')");
$result = $db->query("SELECT * FROM `quests`;");
$quest_data_table = []; // questsテーブルに格納されたいる全データを取得
while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $quest_data_table[] = $row;
}
$db = null; // 終了