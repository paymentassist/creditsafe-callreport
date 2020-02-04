<?php

namespace PaymentAssist\Type;

class Movement
{

    /**
     * @var float
     */
    private $l_of_res;

    /**
     * @var int
     */
    private $move_rate;

    /**
     * @return float
     */
    public function getL_of_res()
    {
        return $this->l_of_res;
    }

    /**
     * @param float $l_of_res
     * @return Movement
     */
    public function withL_of_res($l_of_res)
    {
        $new = clone $this;
        $new->l_of_res = $l_of_res;

        return $new;
    }

    /**
     * @return int
     */
    public function getMove_rate()
    {
        return $this->move_rate;
    }

    /**
     * @param int $move_rate
     * @return Movement
     */
    public function withMove_rate($move_rate)
    {
        $new = clone $this;
        $new->move_rate = $move_rate;

        return $new;
    }


}

