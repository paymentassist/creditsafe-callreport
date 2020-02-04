<?php

namespace PaymentAssist\Type;

class Creditscores
{

    /**
     * @var \PaymentAssist\Type\CTOutputscore
     */
    private $creditscore;

    /**
     * @return \PaymentAssist\Type\CTOutputscore
     */
    public function getCreditscore()
    {
        return $this->creditscore;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputscore $creditscore
     * @return Creditscores
     */
    public function withCreditscore($creditscore)
    {
        $new = clone $this;
        $new->creditscore = $creditscore;

        return $new;
    }


}

