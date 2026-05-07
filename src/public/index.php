<?php

require_once('../PaymentGateway/Paddle/Transaction.php');
require_once('../PaymentGateway/Paddle/CustomerProfile.php');
require_once('../PaymentGateway/Paddle/DateTime.php');

require_once('../Notification/Email.php');

require_once('../PaymentGateway/Stripe/Transaction.php');

//use PaymentGateway\Paddle\{Transaction, CustomerProfile};
use PaymentGateway\Paddle AS PA;
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new PA\Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new PA\CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction, $paddleCustomerProfile);