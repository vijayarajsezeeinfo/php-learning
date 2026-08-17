<?php

require_once __DIR__ . "/Payment.php";
require_once __DIR__ . "/CashPayment.php";
require_once __DIR__ . "/CardPayment.php";
require_once __DIR__ . "/PaymentService.php";

//using CONSTRUCTOR INJECTION
// $service = new PaymentService(new CashPayment());
// $processedPayment= $service->processPayment(500);
// echo $processedPayment;
// echo "<br>";

// $service2 = new PaymentService(new CardPayment());
// $processedPayment2=$service2->processPayment(1000.00);
// echo $processedPayment2;
// echo "<br>";

//using SETTER INJECTION
$service3 = new PaymentService();
$service3->setPayment(new CardPayment());
$processedPayment3=$service3->processPayment(2000.00);
echo $processedPayment3;
echo "<br>";
?>