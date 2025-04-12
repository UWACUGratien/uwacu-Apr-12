
<?php

$num =10;
echo "original number:" .$num. "<br>";

$num++;
echo "After increment:" . $num . "<br>";

$num--;
echo "After decrement" . $num . "<br>";

$num= $num+5;
echo "after adding 5" . $num . "<br>";

$num -= $num-3;
echo " after substracting 3" . $num . "<br>";

$num *= 2;
echo "After multiplying by 2: " . $num . "<br>";


$num /= 4;
echo "After dividing by 4: " . $num . "<br>";


$modResult = $num % 3;
echo "Remainder when divided by 3: " . $modResult . "<br>";
?>
