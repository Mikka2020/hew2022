<?php

$db = new PDO('mysql:dbname=hew2022;host=localhost;charset=utf8','root','');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); // エラー表示をする為に必要
$result = $db->query("SELECT * FROM `insects`;");
$insect_list = []; //　むしの情報を格納したテーブル
while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $insect_list[] = $row;
}
$db = null; // 終了する