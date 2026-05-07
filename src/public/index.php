<?php

use App\DB;
use App\Enums\Stauts;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction1 = new Transaction(25, 'Transaction 1');
$transaction1->setStatus(Stauts::PAID);

var_dump(Transaction::getCount());

$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);