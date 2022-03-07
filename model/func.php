<?php
/**
 * 引数１：ユーザーID
 * 処理：引数1に入っているユーザーIDがどのむしを登録しているのかを配列true,falseで返す
 * true:登録済み
 * false:未登録
 */
function all_insect_check($user_id)
{
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    $stmt = $db->prepare("SELECT * FROM registers INNER JOIN insects ON registers.insect_id = insects.insect_id AND registers.user_id = $user_id ORDER BY insects.insect_id ASC;");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $check_data = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $check_data[] = $row['insect_id'];
    }
    for ($i=0; $i <= 88; $i++) { // 現在insectsテーブルに入っている全件(88)の配列にfalseを格納
        $all_check[$i] = false;
    }
    foreach ($check_data as $row) { // 登録されているinsect_id番目のfalseをtrueに書き換える
        $all_check[$row] = true;
    }
    return $all_check;
}

/**
 * 引数1:ユーザーID
 * 引数2:むしのID
 * 処理:引数1に入ってるユーザーIDが引数2に入っているむしのIDを登録している場合はtrue,登録していない場合はfalseを返す
 * true:登録済み
 * false:未登録
 */
function insect_check($user_id, $insect_id)
{
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    $stmt = $db->prepare("SELECT * FROM registers INNER JOIN insects ON registers.insect_id = insects.insect_id AND registers.user_id = $user_id ORDER BY insects.insect_id ASC;");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $check_data = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // 引数1で指定したユーザーIDが登録しているむしのIDを全て配列に格納
        $check_data[] = $row['insect_id'];
    }
    foreach ($check_data as $row) {
        if ($row == $insect_id) { // 引数2で指定したむしのIDとユーザーが登録しているむしのIDが一致した時trueを返す、一度も一致しなかった場合はfalseを返す
            $ans = true;
            return $ans;
        } else {
            $ans = false;
        }
    }
    return $ans;
}

/**
 * 引数1:ユーザーID
 * 処理:引数1で指定されたユーザーIDが獲得している経験値を計算しユーザーのランクを返す
 * $user_rank:現在のユーザーランク
 */
function user_rank($user_id)
{
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    $stmt = $db->prepare("SELECT * FROM cleared_quests INNER JOIN quests ON cleared_quests.cleared_quest_id = quests.quest_id AND cleared_quests.user_id = :user_id;");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $user_id = $_COOKIE['user_id'];
    $stmt->execute();
    $quest_exp = [];// 獲得した経験値を合計して格納する
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $quest_exp[] += $row['exp'];
    }
    $db = null;

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
    return $user_rank;
}

/**
 * 引数1:ユーザーID
 * 処理:ユーザが合計で何種類発見しているかを返す関数
 * $registered_cnt:発見した種の数
 */
function registered_counter($user_id)
{
    $registered_cnt = 0;
    $check_registered_insect_array = all_insect_check($user_id);
    foreach ($check_registered_insect_array as $row) {
        if ($row) {
            $registered_cnt++;
        }
    }
    return $registered_cnt;
}