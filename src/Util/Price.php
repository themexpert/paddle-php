<?php

namespace ThemeXpert\Paddle\Util;

class Price
{
    protected $amount = '0';

    protected $currency = NULL;

    public function __construct(Currency $currency, string $amount)
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function __toString()
    {
        return "{$this->currency}:{$this->amount}";
    }
}