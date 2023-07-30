<?php
//
$i = 1;
echo "{$i} \n";

echo "\n今までに学習した普通の加算 \n";
$i = $i + 1;
echo "{$i} \n";

echo "\n複合演算子を使って「プラス 1」する \n";
$i += 1;
echo "{$i} \n";

echo "\n加算子を使って「プラス 1」する \n";
++ $i;
echo "{$i} \n";

echo "\n減算子を使って「マイナス 1」する \n";
-- $i;
echo "{$i} \n";

echo "\n複合演算子を使って「マイナス 1」する \n";
$i -= 1;
echo "{$i} \n";

//do_while
echo "\n";
while(false) {
    echo "while ここは動く？ \n";
}

//
do {
    echo "do-while ここは動く？ \n";
} while(false);

//break_continue
echo "\n";
// continue の確認
echo "\n continue の確認\n";
for($i = 0; $i < 10; ++$i) {
    echo "{$i} は奇数かな？ \n";
    if ( ($i % 2) === 1 ) {
        // 奇数なのでcontinnueする(以降の処理をスキップする)
        continue;
    }
    // 「continue」を通らなければこの処理が動く
    echo "偶数でした!! \n";
}

// break の確認
echo "\n break の確認\n";
$i = 0;
while($i < 10) {
    echo "{$i} \n";
    //
    if ($i >= 5) {
        // ループを抜ける
        echo "{$i}なのでループを抜けます\n";
        break;
    }
    //
    ++$i;
}