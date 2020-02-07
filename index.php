<?php
function fizzBuzz($x) {
    if ($x % 3 == 0) {
        if ($x % 5 == 0) {
            echo "FizzBuzz" . "<br>";
        }
        else {
            echo "Fizz" . "<br>";
        }
    }
    else if ($x % 5 == 0){
        echo "Buzz" . "<br>";
    }
    else {
        echo $x . "<br>";
    }
}


for ($i = 1; $i <= 100; $i++) {
    fizzBuzz($i);
}

fizzBuzz(5);
fizzBuzz(-15);

$numbersToCheck = [23, 27, 33, 35, 50];
echo "NumbersToCheck hat ".count($numbersToCheck)." Zahlen <br>";
foreach ($numbersToCheck as $number) {
    fizzBuzz($number);
}
?>
