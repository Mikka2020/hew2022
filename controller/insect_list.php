<?php
// 定数の読み込み
require_once '../../config.php';
// 関数の読込み
require_once '../model/func.php';
toLogin();

// 昆虫の一覧を読み込む
require_once '../model/insect_list.php';

// tplの読み込み
require_once '../tpl/insect_list.php';