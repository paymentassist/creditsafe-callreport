<?php

namespace PaymentAssist\Type;

use \PaymentAssist\Type\CTAddress;

class Addressmatch extends CTAddress
{
    /**
     * Domicile identifier
     *
     * @var null | int
     */
    private ?int $domicileid = null;

    /**
     * @return null | int
     */
    public function getDomicileid() : ?int
    {
        return $this->domicileid;
    }

    /**
     * @param null | int $domicileid
     * @return static
     */
    public function withDomicileid(?int $domicileid) : static
    {
        $new = clone $this;
        $new->domicileid = $domicileid;

        return $new;
    }
}

