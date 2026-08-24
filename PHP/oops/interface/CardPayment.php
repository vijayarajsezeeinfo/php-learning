<?php
namespace App\Interfaces\Models;
require_once __DIR__ . "/Payment.php";
require_once __DIR__ . "/Report.php";

use App\Interfaces\Payment;
use App\Interfaces\Report;

class CardPayment implements Payment, Report{
  public function pay(float $amount):string{
    return $amount." is paid using CARD";
  }

  public function generateReport():string{
    return "Report generated";
  }
}

?>