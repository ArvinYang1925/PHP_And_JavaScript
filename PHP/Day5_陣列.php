<?php

// 陣列可以儲存複數個資料
$numbers = array(1, 2, 3, 4, 5);


$fruits = [];
$fruits[0] = ["Apple", "Peach"];
$fruits[1] = "Banana";

var_dump($fruits);
foreach ($fruits as $key => $value) {
    echo "第" . $key . "個值" . " -> " . $value[1] . "\n\r";
}


// 資料結構練習

// 1. 你現在擁有 5 張股票，並在股市叱吒風雲，各別賺了 5, 10, 20, 33, 17 元，請用陣列儲存這些資料，並在畫面上印出平均每張賺的錢，和賺錢的總和

$stocks = [5, 10, 20, 33, 17];

$total = 0;
$average = 0;

foreach ($stocks as $stock) {
    $total += $stock;
}
$average = $total / count($stocks);
echo "賺錢的總和 " . $total . "\n\r";
echo "平均每張賺的錢 " . $average . "\n\r";


// 2. 假設你有五位小弟，並儲存在陣列中，分別是 john, john2, john3, johnbun, johngood。年終到了，要發錢給小弟們，而發多少錢，要參考績效，依照績效乘上 1000 塊的基本薪資。

// 每位小弟的績效如下

// john:        120%

// john2:      100%

// john3:      70%

// johnbun:   200%

// 請利用程式算出每位小弟應得到多少錢，然後 johngood 忘了交績效表，所以沒有紀錄，當發現沒有紀錄時，要顯示文字『 johngood 無績效資料 』。

$brothers = ["john", "john2", "john3", "johnbun", "johngood"];
$grades = [
    "john" => 120,
    "john2" => 100,
    "john3" => 70,
    "johnbun" => 200
];

foreach ($brothers as $brother) {
    if (isset($grades[$brother])) {
        echo " " . $brother . " 得 " . ($grades[$brother] / 100) * 1000 . " 元 \n\r";
    } else {
        echo " " . $brother . " 無績效資料  \n\r";
    }
}
