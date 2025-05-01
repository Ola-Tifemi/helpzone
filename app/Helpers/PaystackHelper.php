<?php

namespace App\Helpers;

class PaystackHelper
{
    public static function genTranxRef()
    {
        return 'PSK_' . uniqid() . '_' . time();
    }
}