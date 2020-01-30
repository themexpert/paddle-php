<?php

namespace ThemesGrove\Paddle\Util;

class Currency
{

    protected $code;

    public function __construct($code)
    {
        $this->code = strtoupper($code);
    }

    public function __toString()
    {
        return $this->code;
    }
}