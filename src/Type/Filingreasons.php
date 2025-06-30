<?php

namespace PaymentAssist\Type;

class Filingreasons
{
    /**
     * Each CIFAS Case will have at least one Filing Reason specified
     * The list of possible values can be obtained from the web method LookupData07a table id = cifasfilingreason
     *
     * @var non-empty-array<int<0,max>, string>
     */
    private array $filingreason;

    /**
     * @return non-empty-array<int<0,max>, string>
     */
    public function getFilingreason() : array
    {
        return $this->filingreason;
    }

    /**
     * @param non-empty-array<int<0,max>, string> $filingreason
     * @return static
     */
    public function withFilingreason(array $filingreason) : static
    {
        $new = clone $this;
        $new->filingreason = $filingreason;

        return $new;
    }
}

