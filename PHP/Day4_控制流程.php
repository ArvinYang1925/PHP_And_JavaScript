<?php


$num = 10;

if ($num == 5) {
    echo "Hello";
}

$day = "MonDay";

// 將 $day 轉換為小寫
$day_lower = strtolower($day);

if ($day_lower == "sunday" || $day_lower == "saturday") {
    echo "Weekend" . "\r\n";
} else {
    echo "Normal Day" . "\r\n";
}


$count = 0;
while ($count < 8) {
    echo (++$count . "\r\n"); // 1 2 3 ... 8
}
// while ($count < 8) {
//     echo ($count++ . "\r\n");
// }

$counter = 0;
for ($counter = 0; $counter < 8; $counter++) {
    echo ($counter . "\r\n");
}

// 1. 這個地球的季節千變萬化，請透過設定 $month 變數為月份，並在畫面印出此 $month 對應的季節。

// eg: $month = 2, 印出『冬天』; $month = 7, 印出『夏天』

$month = 7;
if ($month == 12 || $month == 1 || $month == 2) {
    echo ("冬天" . "\r\n");
} else if ($month == 3 || $month == 4 || $month == 5) {
    echo ("春天" . "\r\n");
} else if ($month == 6 || $month == 7 || $month == 8) {
    echo ("夏天" . "\r\n");
} else if ($month == 9 || $month == 10 || $month == 11) {
    echo ("秋天" . "\r\n");
}

// 2.最近某建設公司放話要蓋 150 大樓，也就是有 150 層樓的大樓，而奇數樓，就要在樓層寫上該樓的樓號。例如 3 樓寫 3，7 樓寫 7，偶數樓則不寫。

// 如果某天老闆超無聊，要知道這個 150 大樓，所有有寫樓號的號碼，加總的數字為多少，請試著用程式迴圈，算出這些數字的總和。

$total = 0;
for ($i = 1; $i <= 150; $i++) {
    if ($i % 2 != 0) {
        $total += $i;
    }
}
echo ($total . "\r\n");
