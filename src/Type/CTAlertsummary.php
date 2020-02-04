<?php

namespace PaymentAssist\Type;

class CTAlertsummary
{

    /**
     * @var \PaymentAssist\Type\CTSummaryjudgment
     */
    private $judgments;

    /**
     * @var \PaymentAssist\Type\CTSummarybai
     */
    private $bais;

    /**
     * @var \PaymentAssist\Type\CTAlertsummaryshare
     */
    private $share;

    /**
     * @return \PaymentAssist\Type\CTSummaryjudgment
     */
    public function getJudgments()
    {
        return $this->judgments;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryjudgment $judgments
     * @return CTAlertsummary
     */
    public function withJudgments($judgments)
    {
        $new = clone $this;
        $new->judgments = $judgments;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummarybai
     */
    public function getBais()
    {
        return $this->bais;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarybai $bais
     * @return CTAlertsummary
     */
    public function withBais($bais)
    {
        $new = clone $this;
        $new->bais = $bais;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTAlertsummaryshare
     */
    public function getShare()
    {
        return $this->share;
    }

    /**
     * @param \PaymentAssist\Type\CTAlertsummaryshare $share
     * @return CTAlertsummary
     */
    public function withShare($share)
    {
        $new = clone $this;
        $new->share = $share;

        return $new;
    }


}

