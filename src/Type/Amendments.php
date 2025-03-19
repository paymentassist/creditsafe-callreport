<?php

namespace PaymentAssist\Type;

class Amendments
{
    /**
     * Set of amended subsequent search type amendments
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTInputamendment>
     */
    private array $amendment;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTInputamendment>
     */
    public function getAmendment() : array
    {
        return $this->amendment;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTInputamendment> $amendment
     * @return static
     */
    public function withAmendment(array $amendment) : static
    {
        $new = clone $this;
        $new->amendment = $amendment;

        return $new;
    }
}

