<?php

function fizzBuzz(int $max)
{
    for($i = 1; $i <= $max; ++$i) {
        $s = "";

        if ( ($i % 3) === 0 ) {
         $s = "Fizz ";
        }

        if( ($i % 5) === 0 ){
         $s = $s . "Buzz ";
        }

        if($s === "") {
         $s = "{$i}";
        }

        echo "{$s} \n";
    }
}

fizzBuzz(50);