<?php

namespace PaymentAssist\Type;

class Household
{

    /**
     * @var int
     */
    private $adult_1;

    /**
     * @var int
     */
    private $adults_2;

    /**
     * @var int
     */
    private $adult_3pl;

    /**
     * @return int
     */
    public function getAdult_1()
    {
        return $this->adult_1;
    }

    /**
     * @param int $adult_1
     * @return Household
     */
    public function withAdult_1($adult_1)
    {
        $new = clone $this;
        $new->adult_1 = $adult_1;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdults_2()
    {
        return $this->adults_2;
    }

    /**
     * @param int $adults_2
     * @return Household
     */
    public function withAdults_2($adults_2)
    {
        $new = clone $this;
        $new->adults_2 = $adults_2;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdult_3pl()
    {
        return $this->adult_3pl;
    }

    /**
     * @param int $adult_3pl
     * @return Household
     */
    public function withAdult_3pl($adult_3pl)
    {
        $new = clone $this;
        $new->adult_3pl = $adult_3pl;

        return $new;
    }


}

