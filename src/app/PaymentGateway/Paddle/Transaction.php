<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Stauts;

class Transaction
{
    
    private static int $count = 0;
    private string $status = 'pending';

    public function __construct
    (
        private float $amount
    )
    {
        self::$count++;
    }

    public function process()
    {
        echo 'Processing $' . $this->amount . ' paddle transaction...';
    }

    

    public static function getCount()
    {
        return self::$count;
    }

    public function setStatus(string $status)
    {
        if(! isset(Stauts::ALL_STATUSES[$status]))
        {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;
        return $this;
    }
}