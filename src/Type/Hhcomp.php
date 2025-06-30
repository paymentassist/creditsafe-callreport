<?php

namespace PaymentAssist\Type;

class Hhcomp
{
    /**
     * Household Composition Score
     *
     * @var null | float
     */
    private ?float $compscore = null;

    /**
     * Household Composition Band
     *
     * @var null | int
     */
    private ?int $compband = null;

    /**
     * @return null | float
     */
    public function getCompscore() : ?float
    {
        return $this->compscore;
    }

    /**
     * @param null | float $compscore
     * @return static
     */
    public function withCompscore(?float $compscore) : static
    {
        $new = clone $this;
        $new->compscore = $compscore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCompband() : ?int
    {
        return $this->compband;
    }

    /**
     * @param null | int $compband
     * @return static
     */
    public function withCompband(?int $compband) : static
    {
        $new = clone $this;
        $new->compband = $compband;

        return $new;
    }
}

