<?php

if (true) {
    echo "true だとここを通る？ \n";
}

if (false) {
    echo "false だとここを通る？ \n";
}

$age = 20;
if($age >= 20) {
    echo "成人です \n";
}
if($age < 20) {
    echo "未成年です \n";
}

//else
if($age >= 20) {
    echo "成人です \n";
} else {
    echo "未成年です \n";
}

//elseif
if($age > 20) {
    echo "成人 \n";
} else if($age === 20) {
    echo "新成人おめでとう！！ \n";
} else {
    echo "未成年です \n";
}


$i = 1;
switch ($i) {
    case 0:
        echo "i は 0です \n";
        break;

    case 1:
        echo "i は 1です \n";
        break;

    default:
        echo "i は0と1 以外です \n";
        break;
}

// PHP 8未満だと特に注意が必要なコード
$i = 2;
switch($i) {
    case '2a':
        echo "i は '2a'です \n";
        break;

    case '2':
        echo "i は '2'(string)です \n";
        break;

    case 2:
        echo "i は 2(int)です \n";
        break;

}