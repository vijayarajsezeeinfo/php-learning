<?php

$amount = 500.00;
$payment_amount = 550.00;

try{
    echo "TRY BLOCK";
    echo "<br>";
    if($amount < $payment_amount){
        echo "Insufficient amount";
        echo "<br>";
        throw new Exception("Insufficient amount");
    }
    echo "Payment successfull";
    echo "<br>";
}catch(Exception $e){
    echo "CATCH BLOCK";
    echo "<br>";
    echo $e->getMessage();
    echo "<br>";
}finally{
    echo "FINALLY BLOCK";
    echo "<br>";
    echo "PAYMENT COMPLETED";
    echo "<br>";
}

?>