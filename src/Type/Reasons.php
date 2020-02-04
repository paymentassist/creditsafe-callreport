<?php

namespace PaymentAssist\Type;

class Reasons
{

    /**
     * @var int
     */
    private $code;

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return Reasons
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }


}

