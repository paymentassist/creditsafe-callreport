<?php

namespace PaymentAssist\Type;

class Oias
{

    /**
     * @var \PaymentAssist\Type\Oia
     */
    private $oia;

    /**
     * @var int
     */
    private $total;

    /**
     * @return \PaymentAssist\Type\Oia
     */
    public function getOia()
    {
        return $this->oia;
    }

    /**
     * @param \PaymentAssist\Type\Oia $oia
     * @return Oias
     */
    public function withOia($oia)
    {
        $new = clone $this;
        $new->oia = $oia;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return Oias
     */
    public function withTotal($total)
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }


}

