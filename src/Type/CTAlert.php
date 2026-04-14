<?php

namespace PaymentAssist\Type;

class CTAlert
{
    /**
     * Name and Notice of Correction information for each Alert Individual
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTAlertindividual>
     */
    private array $alertindividual;

    /**
     * Summarised Scores for Alert Individuals (these scores will not be returned for Alert Review)
     *
     * @var null | \PaymentAssist\Type\CTAlertCreditscores
     */
    private ?\PaymentAssist\Type\CTAlertCreditscores $creditscores = null;

    /**
     * Alert Summary Block
     *
     * @var null | \PaymentAssist\Type\CTAlertsummary
     */
    private ?\PaymentAssist\Type\CTAlertsummary $summary = null;

    /**
     * Total number of Individuals that meet Alert criteria (either Alert Decision or Alert Review)
     *
     * @var int
     */
    private int $total;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTAlertindividual>
     */
    public function getAlertindividual(): array
    {
        return $this->alertindividual;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTAlertindividual> $alertindividual
     * @return static
     */
    public function withAlertindividual(array $alertindividual): static
    {
        $new = clone $this;
        $new->alertindividual = $alertindividual;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTAlertCreditscores
     */
    public function getCreditscores(): ?\PaymentAssist\Type\CTAlertCreditscores
    {
        return $this->creditscores;
    }

    /**
     * @param null | \PaymentAssist\Type\CTAlertCreditscores $creditscores
     * @return static
     */
    public function withCreditscores(?\PaymentAssist\Type\CTAlertCreditscores $creditscores): static
    {
        $new = clone $this;
        $new->creditscores = $creditscores;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTAlertsummary
     */
    public function getSummary(): ?\PaymentAssist\Type\CTAlertsummary
    {
        return $this->summary;
    }

    /**
     * @param null | \PaymentAssist\Type\CTAlertsummary $summary
     * @return static
     */
    public function withSummary(?\PaymentAssist\Type\CTAlertsummary $summary): static
    {
        $new = clone $this;
        $new->summary = $summary;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return static
     */
    public function withTotal(int $total): static
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }
}

