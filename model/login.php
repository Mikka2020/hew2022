<?php
// 入力された値をusersテーブルに格納していく

/** 格納する値
 * $_POST['login_id'];
 * $_POST['password'];
 * $_POST['mail'];
 * $_POST['birth_day'];
 */

try {
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8',USER_ID,PASSWORD);
    $db->exec("INSERT INTO 'users' ('login_id' , 'password' , ' mail' , 'birth_day') VALUES ('" . $_POST['login_id'] . "','" . $_POST['password'] . "','" . $_POST['mail'] . "','" . $_POST['birth_day'] . "')");
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $db = null;
}