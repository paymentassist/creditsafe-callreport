<?php

namespace PaymentAssist\Type;

class CTOutputshareaccountAcchistory
{
    /**
     * Set of monthly account history records (ordered most recent first)
     *
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputshareaccountAh>
     */
    private array $ah;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputshareaccountAh>
     */
    public function getAh(): array
    {
        return $this->ah;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputshareaccountAh> $ah
     * @return static
     */
    public function withAh(array $ah): static
    {
        $new = clone $this;
        $new->ah = $ah;

        return $new;
    }
}

