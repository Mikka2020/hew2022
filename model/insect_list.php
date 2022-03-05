<?php
/*
$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8',USER_ID,PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); // エラー表示をする為に必要
$result = $db->query("SELECT * FROM `registers`;");
$insect_list = []; // むしの情報を格納したテーブル
while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
    $insect_list[] = $row;
}

$data_list = [];
foreach ($insect_list as $key => $value) {
    $result = $db->query("SELECT * FROM `insects` WHERE insect_id = '" . $value['insect_id'] . "' ;");
    while($row = $result->fetch(PDO::FETCH_ASSOC)) { // データベースから1件ずつ配列を取得する
        $data_list[] = $row;
    }
    $data_list[] = $result;
}
$db = null; // 終了する
*/

// テスト用ログイン
$_COOKIE['user_id'] = 1;
try {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    if (isset($_COOKIE['user_id'])) {
        $stmt = $db->prepare("SELECT * FROM insects LEFT JOIN registers ON insects.insect_id = registers.insect_id AND registers.user_id = :user_id ORDER BY insects.insect_id ASC;");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $user_id = $_COOKIE['user_id'];
    } else {
        $stmt = $db->prepare("SELECT * FROM insects;");
    }

    $stmt->execute();
    // むしの配列
    $insect_list = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $insect_list[] = $row;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $db = null;
}