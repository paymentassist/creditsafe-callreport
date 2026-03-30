<?php

namespace PaymentAssist\Type;

class CTDemographicsaccount
{
    /**
     * Bank sort code of main banking relationship
     *
     * @var null | string
     */
    private ?string $sortcode = null;

    /**
     * Account number of main banking relationship
     *
     * @var null | string
     */
    private ?string $accountnumber = null;

    /**
     * Total number of months with the current bank
     *
     * @var null | mixed
     */
    private mixed $timeatbank = null;

    /**
     * Account's Payment Method Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicspaymentmethod
     *
     * @var null | string
     */
    private ?string $paymentmethod = null;

    /**
     * Finance/Non Finance Type Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsfinancetype
     *
     * @var null | string
     */
    private ?string $financetype = null;

    /**
     * @return null | string
     */
    public function getSortcode(): ?string
    {
        return $this->sortcode;
    }

    /**
     * @param null | string $sortcode
     * @return static
     */
    public function withSortcode(?string $sortcode): static
    {
        $new = clone $this;
        $new->sortcode = $sortcode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountnumber(): ?string
    {
        return $this->accountnumber;
    }

    /**
     * @param null | string $accountnumber
     * @return static
     */
    public function withAccountnumber(?string $accountnumber): static
    {
        $new = clone $this;
        $new->accountnumber = $accountnumber;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getTimeatbank(): mixed
    {
        return $this->timeatbank;
    }

    /**
     * @param null | mixed $timeatbank
     * @return static
     */
    public function withTimeatbank(mixed $timeatbank): static
    {
        $new = clone $this;
        $new->timeatbank = $timeatbank;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentmethod(): ?string
    {
        return $this->paymentmethod;
    }

    /**
     * @param null | string $paymentmethod
     * @return static
     */
    public function withPaymentmethod(?string $paymentmethod): static
    {
        $new = clone $this;
        $new->paymentmethod = $paymentmethod;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFinancetype(): ?string
    {
        return $this->financetype;
    }

    /**
     * @param null | string $financetype
     * @return static
     */
    public function withFinancetype(?string $financetype): static
    {
        $new = clone $this;
        $new->financetype = $financetype;

        return $new;
    }
}

