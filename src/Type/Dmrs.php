<?php

namespace PaymentAssist\Type;

class Dmrs
{

    /**
     * @var int
     */
    private $dmr;

    /**
     * @return int
     */
    public function getDmr()
    {
        return $this->dmr;
    }

    /**
     * @param int $dmr
     * @return Dmrs
     */
    public function withDmr($dmr)
    {
        $new = clone $this;
        $new->dmr = $dmr;

        return $new;
    }


}

