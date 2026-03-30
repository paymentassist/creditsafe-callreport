<?php

namespace PaymentAssist\Type;

class CTSummarynotices
{
    /**
     * A value of 1 indicates that there is a notice of correction
     *
     * @var int
     */
    private int $nocflag;

    /**
     * Total number of notice of disputes
     *
     * @var int
     */
    private int $totaldisputes;

    /**
     * @return int
     */
    public function getNocflag(): int
    {
        return $this->nocflag;
    }

    /**
     * @param int $nocflag
     * @return static
     */
    public function withNocflag(int $nocflag): static
    {
        $new = clone $this;
        $new->nocflag = $nocflag;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldisputes(): int
    {
        return $this->totaldisputes;
    }

    /**
     * @param int $totaldisputes
     * @return static
     */
    public function withTotaldisputes(int $totaldisputes): static
    {
        $new = clone $this;
        $new->totaldisputes = $totaldisputes;

        return $new;
    }
}

