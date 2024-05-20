<?php

// 合法的變數名稱
$var = "Hello, World!";
$my_var = 10;
$_myVar = 20;
$var123 = 30;

// 非法的變數名稱
// $123var = 40; // 錯誤：變數不能以數字開頭
// $my-var = 50; // 錯誤：變數名稱不能包含連字號

// 變數名稱區分大小寫
$myVar = "lowercase";
$MyVar = "uppercase";

echo $myVar; // 輸出 "lowercase"
echo $MyVar; // 輸出 "uppercase"

// PHP 是一個弱類型語言，變數的類型可以根據賦予它們的值動態變化。

$var = 10;          // 整數
$var = 10.5;        // 浮點數 
$var = "Hello";     // 字串
$var = true;        // 布林值
$var = [1, 2, 3];   // 陣列
$var = new StdClass(); // 物件

$var_1 = "john 是個努力錄課程的人";
$var_2 = 50;
$var_3 = false;
$var_4 = 4.6;

var_dump($var_1);
var_dump($var_2);
var_dump($var_3);
var_dump($var_4);
