<?php

namespace PaymentAssist\Type;

class CTOutputapplicantAccs
{
    /**
     * Output structure for a SHARE account
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputshareaccount>
     */
    private array $acc;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputshareaccount>
     */
    public function getAcc(): array
    {
        return $this->acc;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputshareaccount> $acc
     * @return static
     */
    public function withAcc(array $acc): static
    {
        $new = clone $this;
        $new->acc = $acc;

        return $new;
    }
}

