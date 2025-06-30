<?php

namespace PaymentAssist\Type;

class Dmrs
{
    /**
     * The data matching routines used to match to this CIFAS case 
     * The list of possible values can be obtained from the web method LookupData07a table id = cifasdmr
     *
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\UnsignedLong>
     */
    private array $dmr;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\UnsignedLong>
     */
    public function getDmr() : array
    {
        return $this->dmr;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\UnsignedLong> $dmr
     * @return static
     */
    public function withDmr(array $dmr) : static
    {
        $new = clone $this;
        $new->dmr = $dmr;

        return $new;
    }
}

