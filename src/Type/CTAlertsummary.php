<?php

namespace PaymentAssist\Type;

class CTAlertsummary
{
    /**
     * Judgments Summary
     *
     * @var null | \PaymentAssist\Type\CTSummaryjudgment
     */
    private ?\PaymentAssist\Type\CTSummaryjudgment $judgments = null;

    /**
     * Insolvencies Summary
     *
     * @var null | \PaymentAssist\Type\CTSummarybai
     */
    private ?\PaymentAssist\Type\CTSummarybai $bais = null;

    /**
     * SHARE Account Alert Summary. Not returned if SHARE data is not enabled or allowed
     *
     * @var null | \PaymentAssist\Type\CTAlertsummaryshare
     */
    private ?\PaymentAssist\Type\CTAlertsummaryshare $share = null;

    /**
     * @return null | \PaymentAssist\Type\CTSummaryjudgment
     */
    public function getJudgments() : ?\PaymentAssist\Type\CTSummaryjudgment
    {
        return $this->judgments;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummaryjudgment $judgments
     * @return static
     */
    public function withJudgments(?\PaymentAssist\Type\CTSummaryjudgment $judgments) : static
    {
        $new = clone $this;
        $new->judgments = $judgments;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummarybai
     */
    public function getBais() : ?\PaymentAssist\Type\CTSummarybai
    {
        return $this->bais;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummarybai $bais
     * @return static
     */
    public function withBais(?\PaymentAssist\Type\CTSummarybai $bais) : static
    {
        $new = clone $this;
        $new->bais = $bais;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTAlertsummaryshare
     */
    public function getShare() : ?\PaymentAssist\Type\CTAlertsummaryshare
    {
        return $this->share;
    }

    /**
     * @param null | \PaymentAssist\Type\CTAlertsummaryshare $share
     * @return static
     */
    public function withShare(?\PaymentAssist\Type\CTAlertsummaryshare $share) : static
    {
        $new = clone $this;
        $new->share = $share;

        return $new;
    }
}

