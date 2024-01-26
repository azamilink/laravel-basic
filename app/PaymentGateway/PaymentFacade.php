<?php

namespace App\PaymentGateway;

class PaymentFacede
{
    protected static function getFacadeAccessor()
    {
        return 'Payment';
    }
}