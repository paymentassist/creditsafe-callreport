<?php

namespace PaymentAssist\Type;

class Acchistory
{

    /**
     * @var \PaymentAssist\Type\Ah
     */
    private $ah;

    /**
     * @return \PaymentAssist\Type\Ah
     */
    public function getAh()
    {
        return $this->ah;
    }

    /**
     * @param \PaymentAssist\Type\Ah $ah
     * @return Acchistory
     */
    public function withAh($ah)
    {
        $new = clone $this;
        $new->ah = $ah;

        return $new;
    }


}

