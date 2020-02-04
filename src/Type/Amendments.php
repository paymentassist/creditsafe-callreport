<?php

namespace PaymentAssist\Type;

class Amendments
{

    /**
     * @var \PaymentAssist\Type\CTInputamendment
     */
    private $amendment;

    /**
     * @return \PaymentAssist\Type\CTInputamendment
     */
    public function getAmendment()
    {
        return $this->amendment;
    }

    /**
     * @param \PaymentAssist\Type\CTInputamendment $amendment
     * @return Amendments
     */
    public function withAmendment($amendment)
    {
        $new = clone $this;
        $new->amendment = $amendment;

        return $new;
    }


}

