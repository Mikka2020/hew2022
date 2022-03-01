<?php

$file = '';

if(isset($_POST['submit'])){
  move_uploaded_file($_FILES['upfile']['tmp_name'] , './tmp/'.$_FILES['upfile']['name']);
  $url = "http://localhost:8080/predict?name=" . $_FILES['upfile']['name'];

  // cURLセッションを初期化
  $ch = curl_init();

  // オプションを設定
  curl_setopt($ch, CURLOPT_URL, $url); // 取得するURLを指定
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 実行結果を文字列で返す
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // サーバー証明書の検証を行わない

  // URLの情報を取得
  $response =  curl_exec($ch);

  // 取得結果を表示
  $result = json_decode ($response , true);
  // var_dump($result);

  // セッションを終了
  curl_close($ch);
}

require_once './tpl_index.php';

?>