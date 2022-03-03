<?php
$db = new PDO('mysql:dbname=hew2022;host=localhost;charset=utf8','root','');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); // エラー表示をする為に必要
$result = $db->query("SELECT * FROM `users`;");
$insect_list = []; // むしの情報を格納したテーブル
while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $insect_list[] = $row;
}

$data_list = [];
foreach ($insect_list as $key => $value) {
    $result = $db->query("SELECT * FROM `insects` WHERE insect_name_ro = '" . $value['insect_name'] . "' ;");
    while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
        $data_list[] = $row;
    }
    $data_list[] = $result;
}
$db = null; // 終了する