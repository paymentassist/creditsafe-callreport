<?php

namespace PaymentAssist\Type;

class Reasons
{
    /**
     * Score reason code
     * The list of possible values can be obtained from the web method LookupData07a table id = scorereasoncode
     *
     * @var non-empty-array<int<0,3>, \PaymentAssist\Type\UnsignedLong>
     */
    private array $code;

    /**
     * @return non-empty-array<int<0,3>, \PaymentAssist\Type\UnsignedLong>
     */
    public function getCode() : array
    {
        return $this->code;
    }

    /**
     * @param non-empty-array<int<0,3>, \PaymentAssist\Type\UnsignedLong> $code
     * @return static
     */
    public function withCode(array $code) : static
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }
}

