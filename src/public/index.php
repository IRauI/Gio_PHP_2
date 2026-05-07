<?php

use App\DB;
use App\Enums\Stauts;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction1 = new Transaction(25);
$transaction1->process();