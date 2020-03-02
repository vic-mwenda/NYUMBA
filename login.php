<?php
//ASSIGNMENT:
//Using a for loop , loop from 0 - 100. if a number is a multiple of 3 echo "FIZZ"
//If a number is a multiple of 5 echo "BUZZ" . If a number is a multiple of both 3 and 5 echo "FIZZBUZZ"
//END
for ($x=0;$x<=100;$x++) {
    if ($x == 0) {
        echo $x . ".<br>";
    } elseif ($x % 15 == 0) {
        echo $x . "FIZZBUZZ<br>";
    } elseif ($x % 3 == 0) {
        echo $x."FIZZ<br>";
    }elseif ($x%5==0){
        echo $x."BUZZ<br>";
    }else{
        echo $x.".<br>";
    }
}




for ($i = 100;$i < 100;$i++){
    if ($i % 3== 0 and $i % 5 ==0){
        echo "$i FIZZBUZZ<br>";
    }elseif ($i % 3 == 0){
        echo "$i FIZZ<br>";
    }elseif ($i % 5 == 0){
        echo "$i BUZZ<br>";
    }else{
        echo "$i <br>";
    }
}


