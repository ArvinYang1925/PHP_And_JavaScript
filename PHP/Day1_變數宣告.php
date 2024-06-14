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


// 使用 define() 宣告常數

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'database');

// 在條件語句中使用 define()
if (!defined('APP_ENV')) {
    define('APP_ENV', 'development');
}
echo defined('APP_ENV');

echo DB_HOST . PHP_EOL; // 輸出: localhost
echo APP_ENV . PHP_EOL;  // 輸出: development

// 使用 const 宣告常數

const API_KEY = '1234567890';
const DEBUG_MODE = true;

// const 不能在條件語句中使用，這會導致語法錯誤
// if (!defined('LOG_LEVEL')) {
//     const LOG_LEVEL = 'debug'; // 這行會報錯
// }

echo API_KEY . PHP_EOL;  // 輸出: 1234567890
echo DEBUG_MODE . PHP_EOL;  // 輸出: 1

// 魔術常數（Magic Constants）

echo __LINE__ . PHP_EOL;
echo __FILE__ . PHP_EOL;
