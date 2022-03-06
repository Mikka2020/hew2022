<?php
// テスト用ログイン
$_COOKIE['user_id'] = 1;
try {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    if (isset($_COOKIE['user_id'])) {
        $stmt = $db->prepare("SELECT *, insects.insect_id AS insects_insect_id FROM insects INNER JOIN insect_categories ON insects.insect_category_id = insect_categories.category_id LEFT JOIN registers ON insects.insect_id = registers.insect_id AND registers.user_id = :user_id ORDER BY insects.insect_id ASC;");
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

// ユーザーがクリアしてるクエストの獲得経験値に応じてレベルを変動
$user_level = 0; // ユーザーの初期レベル
try {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    $stmt = $db->prepare("SELECT * FROM cleared_quests INNER JOIN quests ON cleared_quests.cleared_quest_id = quests.quest_id AND cleared_quests.user_id = :user_id;");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $user_id = $_COOKIE['user_id'];
    $stmt->execute();
    // 獲得した経験値の配列
    $quest_exp = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $quest_exp[] += $row['exp'];
    }
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $db = null;
}

$sum_exp = 0; // 獲得経験値の合計値
foreach ($quest_exp as $row) {
    $sum_exp += $row;
}

if (0 <= $sum_exp && $sum_exp < 3) { // 0以上3以下の場合はレベル1
    $user_rank = 1;
} elseif (3 <= $sum_exp && $sum_exp < 10) { // 3以上10以下の場合はレベル2
    $user_rank = 2;
} elseif (10 <= $sum_exp && $sum_exp < 18) { // 10以上18未満の場合はレベル3
    $user_rank = 3;
} elseif (18 <= $sum_exp && $sum_exp < 26) { // 18以上26未満の場合はレベル4
    $user_rank = 4;
} elseif (26 <= $sum_exp && $sum_exp < 42) { // 26以上42未満の場合はレベル5
    $user_rank = 5;
} elseif (42 <= $sum_exp && $sum_exp < 57) { // 42以上57未満の場合はレベル6
    $user_rank = 6;
} elseif (57 <= $sum_exp && $sum_exp < 77) { // 57以上77未満の場合はレベル7
    $user_rank = 7;
} elseif (77 <= $sum_exp && $sum_exp < 100) { // 77以上100未満の場合はレベル8
    $user_rank = 8;
} elseif (100 <= $sum_exp && $sum_exp < 125) { // 100以上125未満の場合はレベル9
    $user_rank = 9;
} elseif (125 <= $sum_exp) { // 125以上の場合はレベル10
    $user_rank = 10;
}