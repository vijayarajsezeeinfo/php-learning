<?php

echo "DATE AND TIME";
echo "<br>";

//DATE
echo date("Y-m-d");
echo "<br>";

//TIME
echo date("H-i-s");
echo "<br>";

//DATE and TIME
echo date("Y-m-d H-i-s");
echo "<br>";

echo "Today is ".date("Y-m-d");
echo "<br>";

//
echo "Today is ".date("l, F d, Y");
//output:  Today is Thursday, August 13, 2026
echo "<br>";

//TIMESTAMP
echo time();
echo "<br>";
echo "Readable date : ".date("Y-m-d H-i-s", time());
echo "<br>";

//srttotime
$date = "2026-08-13";
echo date("Y-m-d", strtotime($date));
echo "<br>";

//Date calculation
$today = date("Y-m-d");
$duedate =date("Y-m-d", strtotime("+15 days"));

echo "Today : ".$today;
echo "<br>";
echo "Duedate : ".$duedate;
echo "<br>";


//date difference
$date1 = strtotime("2026-08-13");
echo "date 1 : ".$date1;
echo "<br>";

$date2 = strtotime("2026-08-20");
echo "date 2 : ".$date2;
echo "<br>";

$difference = $date2- $date1;

echo "Difference between 2 dates: ".$difference / (60*60*24);
echo "<br>";

?>