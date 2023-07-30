<?php
// 10回ループする処理
for($i = 0; $i < 10; ++$i) {
    echo "{$i} \n";
}

//「１から１０まで」処理する
echo "\n";
echo "「１から１０まで」処理する \n";
for($i = 1; $i <= 10; ++$i) {
    echo"{$i} \n";
}

//「while」10回ループする処理
echo"「while」\n";
$i = 0;
while($i < 10) {
    echo "{$i} \n";
    ++ $i;
}

echo "\n";
echo "「１から１０まで」処理 \n";
$i = 1;
while($i <= 10) {
    echo "{$i} \n";
    ++ $i;
}