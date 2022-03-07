<?php
header("Content-Type: application/json");
require_once "./../../config.php";
try {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    if (isset($_POST['user_id'])) {
        $stmt = $db->prepare("SELECT insects.insect_id AS insects_insect_id,insects.insect_name,insects.pref_id,registers.id,registers.register_id,prefs.pref_id FROM insects INNER JOIN prefs ON insects.pref_id = prefs.pref_id INNER JOIN insect_categories ON insects.insect_category_id = insect_categories.category_id LEFT JOIN registers ON insects.insect_id = registers.insect_id AND registers.user_id = :user_id GROUP BY insects.insect_id ORDER BY insects.insect_id ASC;");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $user_id = $_POST['user_id'];
    } else {
        $stmt = $db->prepare("SELECT * FROM insects;");
    }

    // $region_id = $_POST['region_id'];
    $stmt->execute();
    $list = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $list[] = $row;
    }
    $json = json_encode($list, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    echo $json;
    // echo json_encode($_POST);
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $db = null;
    exit;
}