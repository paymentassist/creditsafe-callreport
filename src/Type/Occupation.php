<?php

namespace PaymentAssist\Type;

class Occupation
{

    /**
     * @var float
     */
    private $occscore;

    /**
     * @var int
     */
    private $occband;

    /**
     * @return float
     */
    public function getOccscore()
    {
        return $this->occscore;
    }

    /**
     * @param float $occscore
     * @return Occupation
     */
    public function withOccscore($occscore)
    {
        $new = clone $this;
        $new->occscore = $occscore;

        return $new;
    }

    /**
     * @return int
     */
    public function getOccband()
    {
        return $this->occband;
    }

    /**
     * @param int $occband
     * @return Occupation
     */
    public function withOccband($occband)
    {
        $new = clone $this;
        $new->occband = $occband;

        return $new;
    }


}

