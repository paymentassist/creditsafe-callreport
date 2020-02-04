<?php

namespace PaymentAssist\Type;

class CTOutputscore
{

    /**
     * @var \PaymentAssist\Type\Score
     */
    private $score;

    /**
     * @var \PaymentAssist\Type\Reasons
     */
    private $reasons;

    /**
     * @return \PaymentAssist\Type\Score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param \PaymentAssist\Type\Score $score
     * @return CTOutputscore
     */
    public function withScore($score)
    {
        $new = clone $this;
        $new->score = $score;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Reasons
     */
    public function getReasons()
    {
        return $this->reasons;
    }

    /**
     * @param \PaymentAssist\Type\Reasons $reasons
     * @return CTOutputscore
     */
    public function withReasons($reasons)
    {
        $new = clone $this;
        $new->reasons = $reasons;

        return $new;
    }


}

