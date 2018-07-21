<?php

/*
An integer is the infinite seq 1, 2, 3, 5, 13 of which two terms are 

*/

function fib($a)
{
    if(($a == 0 )|| ($a == 1))
    {
        return 1;
    }
    else
    {
        
        $fib = fib($a-1) + fib($a-2);
        return $fib;
    }
}

for($j = 0; $j<100; $j++)
{
    $gub = fib($j);
    echo "<br>" . $gub;
}




