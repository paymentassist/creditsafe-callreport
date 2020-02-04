<?php

namespace PaymentAssist\Type;

class Oia
{

    /**
     * @var string
     */
    private $searchid;

    /**
     * @var int
     */
    private $oiaid;

    /**
     * @return string
     */
    public function getSearchid()
    {
        return $this->searchid;
    }

    /**
     * @param string $searchid
     * @return Oia
     */
    public function withSearchid($searchid)
    {
        $new = clone $this;
        $new->searchid = $searchid;

        return $new;
    }

    /**
     * @return int
     */
    public function getOiaid()
    {
        return $this->oiaid;
    }

    /**
     * @param int $oiaid
     * @return Oia
     */
    public function withOiaid($oiaid)
    {
        $new = clone $this;
        $new->oiaid = $oiaid;

        return $new;
    }


}

