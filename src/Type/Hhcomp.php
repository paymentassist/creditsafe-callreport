<?php

namespace PaymentAssist\Type;

class Hhcomp
{

    /**
     * @var float
     */
    private $compscore;

    /**
     * @var int
     */
    private $compband;

    /**
     * @return float
     */
    public function getCompscore()
    {
        return $this->compscore;
    }

    /**
     * @param float $compscore
     * @return Hhcomp
     */
    public function withCompscore($compscore)
    {
        $new = clone $this;
        $new->compscore = $compscore;

        return $new;
    }

    /**
     * @return int
     */
    public function getCompband()
    {
        return $this->compband;
    }

    /**
     * @param int $compband
     * @return Hhcomp
     */
    public function withCompband($compband)
    {
        $new = clone $this;
        $new->compband = $compband;

        return $new;
    }


}

