<?php
// 昆虫IDを取得しinsectsテーブルから全件取得
$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // エラー表示をする為に必要
// $result = $db->query("SELECT * FROM `insects` WHERE insect_id = 42;");
$stmt = $db->prepare("SELECT * FROM `insects` WHERE insect_id = :id"); // ゲットで取得したidのむしを取得
$stmt->bindParam(':id', $insect_id, PDO::PARAM_INT);
$insect_id = $_GET['id'];
$stmt->execute();
$insect_data = ""; // むしの情報を格納
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $insect_data = $row;
}
$db = null;

$rea = 3 - $insect_data['rarity'];