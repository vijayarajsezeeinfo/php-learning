<?php

class PaymentService{
    private Payment $payment;

    //for CONSTRUCTOR INJECTION
    // public function __construct(Payment $payment){
    //     $this->payment = $payment;
    // }

    public function __construct(){
    }

    //for SETTER INJECTION
    public function setPayment(Payment $payment):void{
        $this->payment = $payment;
    }

    public function processPayment(float $amount){
    return $this->payment->pay($amount);
    }
}

?>