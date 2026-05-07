<?php

//require_once('../app/PaymentGateway/Paddle/Transaction.php');
//require_once('../app/PaymentGateway/Paddle/CustomerProfile.php');
//require_once('../app/Notification/Email.php');
//require_once('../app/PaymentGateway/Stripe/Transaction.php');

/*
spl_autoload_register(
    function($class)
    {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class) . '.php');
    
    if (file_exists($path)){
        require $path;
    }
}, prepend: true);
*/

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

var_dump($paddleTransaction);