<?php

session_start();
// 定数の読み込み
require_once '../../config.php';
// 関数の読込み
require_once '../model/func.php';
toLogin();

// セッションの値が存在しない場合
if (!isset($_SESSION['result'])) {
    session_destroy();
    header('location: ./insect_register.php');
}
//「とうろく」ボタンが押された場合に登録処理
if (isset($_POST['submit'])) {
    require_once '../model/insect_register.php';
}

$file_name = $_SESSION['new_filename'];
$result_labels = $_SESSION['insect_id'];
session_destroy();

// tplの読み込み
require_once '../tpl/insect_register_result.php';