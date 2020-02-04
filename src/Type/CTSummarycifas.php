<?php

namespace PaymentAssist\Type;

class CTSummarycifas
{

    /**
     * @var int
     */
    private $totalcifas;

    /**
     * @return int
     */
    public function getTotalcifas()
    {
        return $this->totalcifas;
    }

    /**
     * @param int $totalcifas
     * @return CTSummarycifas
     */
    public function withTotalcifas($totalcifas)
    {
        $new = clone $this;
        $new->totalcifas = $totalcifas;

        return $new;
    }


}

