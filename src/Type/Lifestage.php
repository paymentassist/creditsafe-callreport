<?php

namespace PaymentAssist\Type;

class Lifestage
{
    /**
     * Lifestage Score
     *
     * @var null | float
     */
    private ?float $lifescore = null;

    /**
     * Lifestage Band
     *
     * @var null | int
     */
    private ?int $lifeband = null;

    /**
     * @return null | float
     */
    public function getLifescore() : ?float
    {
        return $this->lifescore;
    }

    /**
     * @param null | float $lifescore
     * @return static
     */
    public function withLifescore(?float $lifescore) : static
    {
        $new = clone $this;
        $new->lifescore = $lifescore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getLifeband() : ?int
    {
        return $this->lifeband;
    }

    /**
     * @param null | int $lifeband
     * @return static
     */
    public function withLifeband(?int $lifeband) : static
    {
        $new = clone $this;
        $new->lifeband = $lifeband;

        return $new;
    }
}

