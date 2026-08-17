<?php

require_once __DIR__ . "/Payment.php";
require_once __DIR__ . "/Report.php";
require_once __DIR__ . "/CashPayment.php";
require_once __DIR__ . "/CardPayment.php";

use App\Interfaces\Models\CashPayment;
use App\Interfaces\Models\CardPayment;

$cashPayment = new CashPayment();
$cardPayment = new CardPayment();

$cash =$cashPayment->pay(1000.00);
$card =$cardPayment->pay(1000.00);

echo $cash;
echo "<br>";
echo $card;
echo "<br>";
echo $cashPayment->generateReport();
echo "<br>";


?>