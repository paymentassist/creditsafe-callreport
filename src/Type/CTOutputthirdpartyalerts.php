<?php

namespace PaymentAssist\Type;

class CTOutputthirdpartyalerts
{

    /**
     * @var \PaymentAssist\Type\CTAlert
     */
    private $decision;

    /**
     * @var \PaymentAssist\Type\CTAlert
     */
    private $review;

    /**
     * @var \PaymentAssist\Type\CTHho
     */
    private $hho;

    /**
     * @return \PaymentAssist\Type\CTAlert
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * @param \PaymentAssist\Type\CTAlert $decision
     * @return CTOutputthirdpartyalerts
     */
    public function withDecision($decision)
    {
        $new = clone $this;
        $new->decision = $decision;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTAlert
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \PaymentAssist\Type\CTAlert $review
     * @return CTOutputthirdpartyalerts
     */
    public function withReview($review)
    {
        $new = clone $this;
        $new->review = $review;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTHho
     */
    public function getHho()
    {
        return $this->hho;
    }

    /**
     * @param \PaymentAssist\Type\CTHho $hho
     * @return CTOutputthirdpartyalerts
     */
    public function withHho($hho)
    {
        $new = clone $this;
        $new->hho = $hho;

        return $new;
    }


}

