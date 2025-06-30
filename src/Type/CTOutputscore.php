<?php

namespace PaymentAssist\Type;

class CTOutputscore
{
    /**
     * Calculated credit score
     *
     * @var null | \PaymentAssist\Type\Score
     */
    private ?\PaymentAssist\Type\Score $score = null;

    /**
     * Set of reason codes for the credit score
     *
     * @var null | \PaymentAssist\Type\Reasons
     */
    private ?\PaymentAssist\Type\Reasons $reasons = null;

    /**
     * @return null | \PaymentAssist\Type\Score
     */
    public function getScore() : ?\PaymentAssist\Type\Score
    {
        return $this->score;
    }

    /**
     * @param null | \PaymentAssist\Type\Score $score
     * @return static
     */
    public function withScore(?\PaymentAssist\Type\Score $score) : static
    {
        $new = clone $this;
        $new->score = $score;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Reasons
     */
    public function getReasons() : ?\PaymentAssist\Type\Reasons
    {
        return $this->reasons;
    }

    /**
     * @param null | \PaymentAssist\Type\Reasons $reasons
     * @return static
     */
    public function withReasons(?\PaymentAssist\Type\Reasons $reasons) : static
    {
        $new = clone $this;
        $new->reasons = $reasons;

        return $new;
    }
}

