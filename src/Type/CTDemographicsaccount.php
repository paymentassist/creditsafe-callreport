<?php

namespace PaymentAssist\Type;

class CTDemographicsaccount
{

    /**
     * @var string
     */
    private $sortcode;

    /**
     * @var string
     */
    private $accountnumber;

    /**
     * @var string
     */
    private $timeatbank;

    /**
     * @var string
     */
    private $paymentmethod;

    /**
     * @var string
     */
    private $financetype;

    /**
     * @return string
     */
    public function getSortcode()
    {
        return $this->sortcode;
    }

    /**
     * @param string $sortcode
     * @return CTDemographicsaccount
     */
    public function withSortcode($sortcode)
    {
        $new = clone $this;
        $new->sortcode = $sortcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountnumber()
    {
        return $this->accountnumber;
    }

    /**
     * @param string $accountnumber
     * @return CTDemographicsaccount
     */
    public function withAccountnumber($accountnumber)
    {
        $new = clone $this;
        $new->accountnumber = $accountnumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimeatbank()
    {
        return $this->timeatbank;
    }

    /**
     * @param string $timeatbank
     * @return CTDemographicsaccount
     */
    public function withTimeatbank($timeatbank)
    {
        $new = clone $this;
        $new->timeatbank = $timeatbank;

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
     * @return CTDemographicsaccount
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
    public function getFinancetype()
    {
        return $this->financetype;
    }

    /**
     * @param string $financetype
     * @return CTDemographicsaccount
     */
    public function withFinancetype($financetype)
    {
        $new = clone $this;
        $new->financetype = $financetype;

        return $new;
    }


}

