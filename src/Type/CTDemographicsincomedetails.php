<?php

namespace PaymentAssist\Type;

class CTDemographicsincomedetails
{

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $paymentmethod;

    /**
     * @var string
     */
    private $frequency;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return CTDemographicsincomedetails
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return CTDemographicsincomedetails
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentmethod()
    {
        return $this->paymentmethod;
    }

    /**
     * @param string $paymentmethod
     * @return CTDemographicsincomedetails
     */
    public function withPaymentmethod($paymentmethod)
    {
        $new = clone $this;
        $new->paymentmethod = $paymentmethod;

        return $new;
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param string $frequency
     * @return CTDemographicsincomedetails
     */
    public function withFrequency($frequency)
    {
        $new = clone $this;
        $new->frequency = $frequency;

        return $new;
    }


}

