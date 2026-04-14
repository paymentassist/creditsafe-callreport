<?php

namespace PaymentAssist\Type;

class CTDemographicsincome
{
    /**
     * Applicant's Main Income details
     *
     * @var null | \PaymentAssist\Type\CTDemographicsincomedetails
     */
    private ?\PaymentAssist\Type\CTDemographicsincomedetails $primary = null;

    /**
     * Set of details for any additional income
     *
     * @var null | \PaymentAssist\Type\CTDemographicsincomedetails
     */
    private ?\PaymentAssist\Type\CTDemographicsincomedetails $additional = null;

    /**
     * @return null | \PaymentAssist\Type\CTDemographicsincomedetails
     */
    public function getPrimary(): ?\PaymentAssist\Type\CTDemographicsincomedetails
    {
        return $this->primary;
    }

    /**
     * @param null | \PaymentAssist\Type\CTDemographicsincomedetails $primary
     * @return static
     */
    public function withPrimary(?\PaymentAssist\Type\CTDemographicsincomedetails $primary): static
    {
        $new = clone $this;
        $new->primary = $primary;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTDemographicsincomedetails
     */
    public function getAdditional(): ?\PaymentAssist\Type\CTDemographicsincomedetails
    {
        return $this->additional;
    }

    /**
     * @param null | \PaymentAssist\Type\CTDemographicsincomedetails $additional
     * @return static
     */
    public function withAdditional(?\PaymentAssist\Type\CTDemographicsincomedetails $additional): static
    {
        $new = clone $this;
        $new->additional = $additional;

        return $new;
    }
}

