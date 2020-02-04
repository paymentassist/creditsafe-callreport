<?php

namespace PaymentAssist\Type;

class Judgments
{

    /**
     * @var \PaymentAssist\Type\CTOutputjudgment
     */
    private $judgment;

    /**
     * @return \PaymentAssist\Type\CTOutputjudgment
     */
    public function getJudgment()
    {
        return $this->judgment;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputjudgment $judgment
     * @return Judgments
     */
    public function withJudgment($judgment)
    {
        $new = clone $this;
        $new->judgment = $judgment;

        return $new;
    }


}

