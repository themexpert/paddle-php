<?php

namespace ThemesGrove\Paddle\Util;

class Price
{

    protected $amount = 0;

    protected $currency = NULL;

    public function __construct($amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function __toString()
    {
        return "{$this->currency}:{$this->amount}";
    }
}