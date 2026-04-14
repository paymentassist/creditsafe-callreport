<?php

namespace PaymentAssist\Type;

class CTOutputscore
{
    /**
     * Calculated credit score
     *
     * @var null | \PaymentAssist\Type\CTOutputscoreScore
     */
    private ?\PaymentAssist\Type\CTOutputscoreScore $score = null;

    /**
     * Set of reason codes for the credit score
     *
     * @var null | \PaymentAssist\Type\CTOutputscoreReasons
     */
    private ?\PaymentAssist\Type\CTOutputscoreReasons $reasons = null;

    /**
     * @return null | \PaymentAssist\Type\CTOutputscoreScore
     */
    public function getScore(): ?\PaymentAssist\Type\CTOutputscoreScore
    {
        return $this->score;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputscoreScore $score
     * @return static
     */
    public function withScore(?\PaymentAssist\Type\CTOutputscoreScore $score): static
    {
        $new = clone $this;
        $new->score = $score;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputscoreReasons
     */
    public function getReasons(): ?\PaymentAssist\Type\CTOutputscoreReasons
    {
        return $this->reasons;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputscoreReasons $reasons
     * @return static
     */
    public function withReasons(?\PaymentAssist\Type\CTOutputscoreReasons $reasons): static
    {
        $new = clone $this;
        $new->reasons = $reasons;

        return $new;
    }
}

