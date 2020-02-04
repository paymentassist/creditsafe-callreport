<?php

namespace PaymentAssist\Type;

class Addressmatch
{

    /**
     * @var int
     */
    private $domicileid;

    /**
     * @return int
     */
    public function getDomicileid()
    {
        return $this->domicileid;
    }

    /**
     * @param int $domicileid
     * @return Addressmatch
     */
    public function withDomicileid($domicileid)
    {
        $new = clone $this;
        $new->domicileid = $domicileid;

        return $new;
    }


}

