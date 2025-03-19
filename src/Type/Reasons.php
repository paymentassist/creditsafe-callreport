<?php

namespace PaymentAssist\Type;

class Reasons
{
    private array $code;

    public function getCode(): array
    {
        return $this->code;
    }

    public function withCode(array $code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }
}

