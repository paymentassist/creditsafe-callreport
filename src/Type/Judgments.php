<?php

namespace PaymentAssist\Type;

class Judgments
{
    /**
     * Output structure for a Judgment
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputjudgment>
     */
    private array $judgment;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputjudgment>
     */
    public function getJudgment() : array
    {
        return $this->judgment;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputjudgment> $judgment
     * @return static
     */
    public function withJudgment(array $judgment) : static
    {
        $new = clone $this;
        $new->judgment = $judgment;

        return $new;
    }
}

