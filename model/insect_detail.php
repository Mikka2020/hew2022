<?php
// テスト用ログイン
$_COOKIE['user_id'] = 1;

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


// 指定した昆虫をユーザーが何匹登録しているか返す
function insect_register_cnt($user_id, $insect_id)
{
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    $stmt = $db->prepare("SELECT COUNT(*) FROM registers WHERE user_id = $user_id AND insect_id = $insect_id");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':insect_id', $insect_id, PDO::PARAM_INT);
    $stmt->execute();
    return (int)($stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)']);
}

$register_cnt = insect_register_cnt($_COOKIE['user_id'], $_GET['id']);
if ($register_cnt == 0) {
    $tab_id[2] = "not-release-2";
    $tab_id[3] = "not-release-3";
} elseif ($register_cnt == 1) {
    $tab_id[2] = "tab-2";
    $tab_id[3] = "not-release-3";
} else {
    $tab_id[2] = "tab-2";
    $tab_id[3] = "tab-3";
}
