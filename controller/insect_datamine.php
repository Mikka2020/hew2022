<?php

session_start();
// 定数の読み込み
require_once '../../config.php';

// セッションの値が存在しない場合
if(!isset($_SESSION['result'])){
  session_destroy();
  header('location: ./insect_register.php');
}
//「とうろく」ボタンが押された場合に登録処理
if(isset($_POST['submit'])){
  require_once '../model/insect_register.php';
}

// tplの読み込み
require_once '../tpl/insect_datamine.php';