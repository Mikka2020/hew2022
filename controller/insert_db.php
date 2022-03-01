<?php
try {
    $db = new PDO('mysql:dbname=hew2022;host=localhost;charset=utf8', 'root', '');
    // $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ATTR_ERRMODE_WARNING); // エラーを表示するためには必要
    $db->exec("INSERT INTO `users` (`insect_name`, `insect_photo`, `shooting_location`) VALUES ('" . $result[0]['labels'] . "', '" . $_FILES['upfile']['name'] . "', '" . 'ここには都道府県が入ります' . "')");
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $db = null;
}
