<?php

namespace PaymentAssist\Type;

class CTAlert
{

    /**
     * @var \PaymentAssist\Type\CTAlertindividual
     */
    private $alertindividual;

    /**
     * @var \PaymentAssist\Type\Creditscores
     */
    private $creditscores;

    /**
     * @var \PaymentAssist\Type\CTAlertsummary
     */
    private $summary;

    /**
     * @var int
     */
    private $total;

    /**
     * @return \PaymentAssist\Type\CTAlertindividual
     */
    public function getAlertindividual()
    {
        return $this->alertindividual;
    }

    /**
     * @param \PaymentAssist\Type\CTAlertindividual $alertindividual
     * @return CTAlert
     */
    public function withAlertindividual($alertindividual)
    {
        $new = clone $this;
        $new->alertindividual = $alertindividual;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Creditscores
     */
    public function getCreditscores()
    {
        return $this->creditscores;
    }

    /**
     * @param \PaymentAssist\Type\Creditscores $creditscores
     * @return CTAlert
     */
    public function withCreditscores($creditscores)
    {
        $new = clone $this;
        $new->creditscores = $creditscores;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTAlertsummary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param \PaymentAssist\Type\CTAlertsummary $summary
     * @return CTAlert
     */
    public function withSummary($summary)
    {
        $new = clone $this;
        $new->summary = $summary;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return CTAlert
     */
    public function withTotal($total)
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }


}

