<?php
// header("Content-Type: application/json");

try {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8', USER_ID, PASSWORD);
    if (isset($_COOKIE['user_id'])) {
        $stmt = $db->prepare("SELECT * FROM registers INNER JOIN insects ON registers.insect_id = insects.insect_id WHERE registers.user_id = :user_id;");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $user_id = $_COOKIE['user_id'];
    } else {
        $stmt = $db->prepare("SELECT * FROM insects;");
    }

    $stmt->execute();
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
    exit;
}