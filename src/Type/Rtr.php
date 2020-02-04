<?php

namespace PaymentAssist\Type;

class Rtr
{

    /**
     * @var \PaymentAssist\Type\CTOutputrtraccount
     */
    private $account;

    /**
     * @return \PaymentAssist\Type\CTOutputrtraccount
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputrtraccount $account
     * @return Rtr
     */
    public function withAccount($account)
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }


}

