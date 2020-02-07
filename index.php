<?php
function fizzBuzz(int $number) {
    if ($number % 3 == 0) {
        if ($number % 5 == 0) {
            echo "FizzBuzz" . "<br>";
        }
        else {
            echo "Fizz" . "<br>";
        }
    }
    else if ($number % 5 == 0){
        echo "Buzz" . "<br>";
    }
    else {
        echo $number . "<br>";
    }
}


for ($i = 1; $i <= 100; $i++) {
    fizzBuzz($i);
}

fizzBuzz(5);
fizzBuzz(-15);

$numbersToCheck = [23, 27, 33, 35, 50, "Jana", "0"];
echo "NumbersToCheck hat ".count($numbersToCheck)." Zahlen <br>";
foreach ($numbersToCheck as $number) {
    if (is_numeric($number)) {
        fizzBuzz($number);
    }
     else {
         echo "Falsche Eingabe: ".$number."<br>";
     }
}
?>
