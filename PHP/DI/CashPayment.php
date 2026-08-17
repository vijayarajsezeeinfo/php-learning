<?php

class CashPayment implements Payment{

public function pay(float $amount):string{
    return $amount." is paid using CASH";
}


}

?>