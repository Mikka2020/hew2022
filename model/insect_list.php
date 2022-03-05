<?php
// テスト用ログイン
$_COOKIE['user_id'] = 1;
try {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    if (isset($_COOKIE['user_id'])) {
        $stmt = $db->prepare("SELECT * FROM insects INNER JOIN insect_categories ON insects.insect_category_id = insect_categories.category_id LEFT JOIN registers ON insects.insect_id = registers.insect_id AND registers.user_id = :user_id ORDER BY insects.insect_id ASC;");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $user_id = $_COOKIE['user_id'];
    } else {
        $stmt = $db->prepare("SELECT * FROM insects;");
    }

    $stmt->execute();
    // むしの配列
    $insect_list = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $insect_list[$row['category_name']][] = $row;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $db = null;
}