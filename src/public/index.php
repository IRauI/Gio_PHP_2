<?php

use App\Enums\Stauts;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();

$transaction->setStatus(Stauts::PAID);

var_dump($transaction);