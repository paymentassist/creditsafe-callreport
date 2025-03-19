<?php

namespace PaymentAssist\Type;

class Movement
{
    /**
     * Average length of residency
     *
     * @var null | float
     */
    private ?float $l_of_res = null;

    /**
     * Movement rate (and %) from Electoral Roll historical activity
     *
     * @var null | int
     */
    private ?int $move_rate = null;

    /**
     * @return null | float
     */
    public function getLOfRes() : ?float
    {
        return $this->l_of_res;
    }

    /**
     * @param null | float $l_of_res
     * @return static
     */
    public function withLOfRes(?float $l_of_res) : static
    {
        $new = clone $this;
        $new->l_of_res = $l_of_res;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMoveRate() : ?int
    {
        return $this->move_rate;
    }

    /**
     * @param null | int $move_rate
     * @return static
     */
    public function withMoveRate(?int $move_rate) : static
    {
        $new = clone $this;
        $new->move_rate = $move_rate;

        return $new;
    }
}

