<?php
// 定数の読み込み
require_once '../../config.php';
require_once '../model/func.php';
toLogin();

//「はんてい」ボタンが押された場合に判定処理
if (isset($_POST['submit'])) {
    // usersテーブルの一覧を読み込む
    require_once '../model/predict.php';
}

// tplの読み込み
require_once '../tpl/insect_register.php';