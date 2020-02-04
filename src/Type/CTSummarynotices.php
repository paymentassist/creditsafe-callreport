<?php

namespace PaymentAssist\Type;

class CTSummarynotices
{

    /**
     * @var int
     */
    private $nocflag;

    /**
     * @var int
     */
    private $totaldisputes;

    /**
     * @return int
     */
    public function getNocflag()
    {
        return $this->nocflag;
    }

    /**
     * @param int $nocflag
     * @return CTSummarynotices
     */
    public function withNocflag($nocflag)
    {
        $new = clone $this;
        $new->nocflag = $nocflag;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldisputes()
    {
        return $this->totaldisputes;
    }

    /**
     * @param int $totaldisputes
     * @return CTSummarynotices
     */
    public function withTotaldisputes($totaldisputes)
    {
        $new = clone $this;
        $new->totaldisputes = $totaldisputes;

        return $new;
    }


}

