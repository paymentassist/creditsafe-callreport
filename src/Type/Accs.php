<?php

namespace PaymentAssist\Type;

class Accs
{

    /**
     * @var \PaymentAssist\Type\CTOutputshareaccount
     */
    private $acc;

    /**
     * @return \PaymentAssist\Type\CTOutputshareaccount
     */
    public function getAcc()
    {
        return $this->acc;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputshareaccount $acc
     * @return Accs
     */
    public function withAcc($acc)
    {
        $new = clone $this;
        $new->acc = $acc;

        return $new;
    }


}

