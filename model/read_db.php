<?php
header("Content-Type: application/json");

try {
  $db = new PDO('mysql:dbname=hew2022;host=localhost;charset=utf8', 'root', '');
  if (isset($_POST['pref_id'])) {

    $stmt = $db->prepare("SELECT * FROM insects WHERE pref_id = :pref_id ;");
    $stmt->bindParam(':pref_id', $pref_id, PDO::PARAM_INT);
    $pref_id = $_POST['pref_id'];
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