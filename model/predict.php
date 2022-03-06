<?php

//アップロードされたファイル名の拡張子が許可されているか確認
function check_ext($filename){
    //許可する拡張子
    $cfg['ALLOW_EXTS'] = array('jpg', 'jpeg', 'png' , 'gif' , 'JPG' , 'JPEG' , 'PNG' , 'GIF');
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    return in_array($ext, $cfg['ALLOW_EXTS']);
}

if($_FILES['upfile']['error'] > 0){
    $error['file'] = "ファイルエラーです"; //エラー文表示
    $chk = false;
}
//ファイルの拡張子チェック
elseif(!check_ext($_FILES['upfile']['name'])){
    $error['file']= "この形式のファイルはアップロードできません";
    $chk = false;
}
if($chk){
    $ext = strtolower(pathinfo($_FILES['upfile']['name'] , PATHINFO_EXTENSION));
    $file_name = $user_id . '_' . date('YmdHis') . '.' . $ext;
    move_uploaded_file($_FILES['upfile']['tmp_name'] , './python/tmp/' . $file_name);
    $exif = @exif_read_data($_FILES['upfile']['tmp_name']);
    //api server
    $url = "http://localhost:8081/predict?name=" . $user_id . '_' . date('YmdHis') . '.' . $ext;

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
    // セッションを終了
    curl_close($ch);

    //画像一時表示ファイルパス
    $file_pass = './python/tmp' . '$file_name';
}