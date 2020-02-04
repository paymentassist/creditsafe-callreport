<?php

namespace PaymentAssist\Type;

class CTDemographicsincome
{

    /**
     * @var \PaymentAssist\Type\CTDemographicsincomedetails
     */
    private $primary;

    /**
     * @var \PaymentAssist\Type\CTDemographicsincomedetails
     */
    private $additional;

    /**
     * @return \PaymentAssist\Type\CTDemographicsincomedetails
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsincomedetails $primary
     * @return CTDemographicsincome
     */
    public function withPrimary($primary)
    {
        $new = clone $this;
        $new->primary = $primary;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTDemographicsincomedetails
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsincomedetails $additional
     * @return CTDemographicsincome
     */
    public function withAdditional($additional)
    {
        $new = clone $this;
        $new->additional = $additional;

        return $new;
    }


}

