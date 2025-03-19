<?php

namespace PaymentAssist\Type;

class CTSummarycifas
{
    /**
     * Total number of CIFAS Records.
     * If setup to receive CIFAS data then the total number of filings will be returned.
     * If setup to receive CIFAS+ data then the total number of cases will be returned.
     *
     * @var int
     */
    private int $totalcifas;

    /**
     * @return int
     */
    public function getTotalcifas() : int
    {
        return $this->totalcifas;
    }

    /**
     * @param int $totalcifas
     * @return static
     */
    public function withTotalcifas(int $totalcifas) : static
    {
        $new = clone $this;
        $new->totalcifas = $totalcifas;

        return $new;
    }
}

