<?php  

function fibonacciSeries($limit)
{
    $countAdd = 0;  
    $fibonacciNumOne = 0;  
    $fibonacciNumTwo = 1;  
    echo $fibonacciNumOne.' '.$fibonacciNumTwo.' ';  
    
    while ($countAdd < $limit)  
    {  
        $n3 = $fibonacciNumTwo + $fibonacciNumOne;  
        echo $n3.' ';  
        $fibonacciNumOne = $fibonacciNumTwo;  
        $fibonacciNumTwo = $n3;  
        $countAdd = $countAdd + 1;  
    }
    echo  "\n";

}

fibonacciSeries(10);

?>  