<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Stauts;

class Transaction
{

    public function __construct
    (
        private string $status = 'pending'
    )
    {
        var_dump(Stauts::PAID);
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