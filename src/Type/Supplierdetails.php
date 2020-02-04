<?php

namespace PaymentAssist\Type;

class Supplierdetails
{

    /**
     * @var int
     */
    private $apacs;

    /**
     * @return int
     */
    public function getApacs()
    {
        return $this->apacs;
    }

    /**
     * @param int $apacs
     * @return Supplierdetails
     */
    public function withApacs($apacs)
    {
        $new = clone $this;
        $new->apacs = $apacs;

        return $new;
    }


}

