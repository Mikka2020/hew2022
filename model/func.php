<?php
/**
 * 引数１：ユーザーID
 * 処理：引数1に入っているユーザーIDがどのむしを登録しているのかを配列true,falseで返す
 * true:登録済み
 * false:未登録
 */
function all_insect_check($user_id) {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    $stmt = $db->prepare("SELECT * FROM registers INNER JOIN insects ON registers.insect_id = insects.insect_id AND registers.user_id = $user_id ORDER BY insects.insect_id ASC;");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $check_data = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $check_data[] = $row['insect_id'];
    }
    for ($i=0; $i < 88; $i++) { // 現在inssectsテーブルに入っている全件(88)の配列にfalseを格納
        $all_check[$i] = 'false';
    }
    foreach ($check_data as $row) { // 登録されているinsect_id番目のfalseをtrueに書き換える
        $all_check[$row] = 'true';
    }
    return $all_check;
}

/**
 * 引数1:ユーザーID
 * 引数2:むしのID
 * 処理:引数1に入ってるユーザーIDが引数2に入っているむしのIDを登録している場合はtrue,登録していない場合はfalseを返す
 * true:登録ずみ
 * false:未登録
 */
function insect_check($user_id,$insect_id) {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    $stmt = $db->prepare("SELECT * FROM registers INNER JOIN insects ON registers.insect_id = insects.insect_id AND registers.user_id = $user_id ORDER BY insects.insect_id ASC;");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $check_data = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // 引数1で指定したユーザーIDが登録しているむしのIDを全て配列に格納
        $check_data[] = $row['insect_id'];
    }
    foreach ($check_data as $row) {
        if($row == $insect_id) { // 引数2で指定したむしのIDとユーザーが登録しているむしのIDが一致した時trueを返す、一度も一致しなかった場合はfalseを返す
            $ans = 'ture';
            return $ans;
        } else {
            $ans = 'false';
        }
    }
    return $ans;
}