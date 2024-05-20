<?php

$a = 10;
$b = 5;
$sum = $a + $b;
echo $sum . PHP_EOL;

$difference = $a - $b;
echo $difference . PHP_EOL;


// 司機大哥很辛苦，現在搭完計程車，我們來用程式幫忙算錢。
// 假設目前政府跳錶機制為，起跳價 70 元，每公里加收 10 元，而我們現在搭了 $kilogram 公里 ( 假設為 10 )，
// 設計一支程式會印出如下成果:

$start = 70;
$kilogram = 10;

echo "起跳價：" . $start . PHP_EOL;
echo "公里數：" . $kilogram . PHP_EOL;
echo "最終收費：" . ($start + 10 * $kilogram);
