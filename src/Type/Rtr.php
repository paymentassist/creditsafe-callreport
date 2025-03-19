<?php

namespace PaymentAssist\Type;

class Rtr
{
    /**
     * Output structure for a RTR account
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputrtraccount>
     */
    private array $account;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputrtraccount>
     */
    public function getAccount() : array
    {
        return $this->account;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputrtraccount> $account
     * @return static
     */
    public function withAccount(array $account) : static
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }
}

