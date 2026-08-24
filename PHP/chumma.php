<?php

$numbers = [1,2,3,4,5];
echo "numbers are ".implode(", ",$numbers);
echo "<br>";
unset($numbers[4]);
echo "numbers are ".implode(", ",$numbers);

?>