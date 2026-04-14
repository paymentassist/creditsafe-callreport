<?php

namespace PaymentAssist\Type;

class CTDemographicsincomedetails
{
    /**
     * Amount of income received according to frequency
     *
     * @var null | int
     */
    private ?int $amount = null;

    /**
     * Income Type Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsincometype
     *
     * @var null | string
     */
    private ?string $type = null;

    /**
     * Income Payment Method Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsincomepaymentmethod
     *
     * @var null | string
     */
    private ?string $paymentmethod = null;

    /**
     * Income Frequency Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsincomefrequency
     *
     * @var null | string
     */
    private ?string $frequency = null;

    /**
     * @return null | int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param null | int $amount
     * @return static
     */
    public function withAmount(?int $amount): static
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return static
     */
    public function withType(?string $type): static
    {
        $new = clone $this;
        $new->type = $type;

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
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    /**
     * @param null | string $frequency
     * @return static
     */
    public function withFrequency(?string $frequency): static
    {
        $new = clone $this;
        $new->frequency = $frequency;

        return $new;
    }
}

