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


for ($x = 1; $x <= 100; $x++) {
    fizzBuzz($x);
}

fizzBuzz(5);
fizzBuzz(-15);
?>
