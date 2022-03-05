<?php
// 昆虫IDを取得しinsectsテーブルから全件取得
$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8',USER_ID,PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); // エラー表示をする為に必要
$result = $db->query("SELECT * FROM `insects` WHERE insect_id = 42;");
$insect_data = []; // むしの情報を格納したテーブル
while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $insect_data[] = $row;
}

foreach ($insect_data as $key => $value) {
    # code...
    $rea = 3 - $value['rarity'];
}