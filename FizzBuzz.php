<?php

for($i = 1; $i < 100; ++$i) {
    if ( ($i % 3) === 0 ) {
         echo "Fizz ";
    }else if( ($i % 5) === 0 ){
         echo "Buzz ";
    }else if( ($i % 15) === 0){
         echo"Fizz Buzz ";
    } else {
        echo "{$i} ";
    }
    echo "\n";
}
