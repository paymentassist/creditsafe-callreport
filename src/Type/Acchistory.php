<?php

namespace PaymentAssist\Type;

class Acchistory
{
    /**
     * Set of monthly account history records (ordered most recent first)
     *
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\Ah>
     */
    private array $ah;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\Ah>
     */
    public function getAh() : array
    {
        return $this->ah;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\Ah> $ah
     * @return static
     */
    public function withAh(array $ah) : static
    {
        $new = clone $this;
        $new->ah = $ah;

        return $new;
    }
}

