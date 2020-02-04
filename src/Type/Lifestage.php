<?php

namespace PaymentAssist\Type;

class Lifestage
{

    /**
     * @var float
     */
    private $lifescore;

    /**
     * @var int
     */
    private $lifeband;

    /**
     * @return float
     */
    public function getLifescore()
    {
        return $this->lifescore;
    }

    /**
     * @param float $lifescore
     * @return Lifestage
     */
    public function withLifescore($lifescore)
    {
        $new = clone $this;
        $new->lifescore = $lifescore;

        return $new;
    }

    /**
     * @return int
     */
    public function getLifeband()
    {
        return $this->lifeband;
    }

    /**
     * @param int $lifeband
     * @return Lifestage
     */
    public function withLifeband($lifeband)
    {
        $new = clone $this;
        $new->lifeband = $lifeband;

        return $new;
    }


}

