<?php

namespace PaymentAssist\Type;

class CTOutputthirdpartyalerts
{
    /**
     * Alert Decision information for Same Person Associates
     *
     * @var null | \PaymentAssist\Type\CTAlert
     */
    private ?\PaymentAssist\Type\CTAlert $decision = null;

    /**
     * Alert Review information for Un-associated Same Family individuals
     *
     * @var null | \PaymentAssist\Type\CTAlert
     */
    private ?\PaymentAssist\Type\CTAlert $review = null;

    /**
     * Household Override information for Same Family Individuals
     *
     * @var null | \PaymentAssist\Type\CTHho
     */
    private ?\PaymentAssist\Type\CTHho $hho = null;

    /**
     * @return null | \PaymentAssist\Type\CTAlert
     */
    public function getDecision() : ?\PaymentAssist\Type\CTAlert
    {
        return $this->decision;
    }

    /**
     * @param null | \PaymentAssist\Type\CTAlert $decision
     * @return static
     */
    public function withDecision(?\PaymentAssist\Type\CTAlert $decision) : static
    {
        $new = clone $this;
        $new->decision = $decision;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTAlert
     */
    public function getReview() : ?\PaymentAssist\Type\CTAlert
    {
        return $this->review;
    }

    /**
     * @param null | \PaymentAssist\Type\CTAlert $review
     * @return static
     */
    public function withReview(?\PaymentAssist\Type\CTAlert $review) : static
    {
        $new = clone $this;
        $new->review = $review;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTHho
     */
    public function getHho() : ?\PaymentAssist\Type\CTHho
    {
        return $this->hho;
    }

    /**
     * @param null | \PaymentAssist\Type\CTHho $hho
     * @return static
     */
    public function withHho(?\PaymentAssist\Type\CTHho $hho) : static
    {
        $new = clone $this;
        $new->hho = $hho;

        return $new;
    }
}

