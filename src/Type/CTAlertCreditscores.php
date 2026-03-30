<?php

namespace PaymentAssist\Type;

class CTAlertCreditscores
{
    /**
     * Output structure for a credit score
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputscore>
     */
    private array $creditscore;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputscore>
     */
    public function getCreditscore(): array
    {
        return $this->creditscore;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputscore> $creditscore
     * @return static
     */
    public function withCreditscore(array $creditscore): static
    {
        $new = clone $this;
        $new->creditscore = $creditscore;

        return $new;
    }
}

