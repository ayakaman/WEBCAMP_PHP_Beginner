<?php

class FizzBuzz
{
    private int $max;

    public function setMax($i)
    {
         $this->max = $i;
    }

    public function exec()
    {
         for($i = 1; $i <= $this->max; ++$i) {
             $s = "";

             if( ($i % 3) === 0 ) {
                 $s = "Fizz ";
             }

             if( ($i % 5) === 0 ) {
                 $s = $s . "Buzz ";
             }

             if( $s === "" ) {
                 $s = "{$i} ";
             }
             echo "{$s} \n";
             }
    }
}

$obj = new FizzBuzz();
$obj->setMax(50);
$obj->exec();