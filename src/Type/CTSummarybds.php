<?php

namespace PaymentAssist\Type;

class CTSummarybds
{
    /**
     * Total number of minimum payments in the last 12 months.
     *
     * @var null | int
     */
    private ?int $totalminpayments12months = null;

    /**
     * Total number of minimum payments in the last 36 months.
     *
     * @var null | int
     */
    private ?int $totalminpayments36months = null;

    /**
     * Total value of cash advances in the last 12 months.
     *
     * @var null | int
     */
    private ?int $totalvaluecashadvances12months = null;

    /**
     * Total value of cash advances in the last 36 months.
     *
     * @var null | int
     */
    private ?int $totalvaluecashadvances36months = null;

    /**
     * @return null | int
     */
    public function getTotalminpayments12months(): ?int
    {
        return $this->totalminpayments12months;
    }

    /**
     * @param null | int $totalminpayments12months
     * @return static
     */
    public function withTotalminpayments12months(?int $totalminpayments12months): static
    {
        $new = clone $this;
        $new->totalminpayments12months = $totalminpayments12months;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalminpayments36months(): ?int
    {
        return $this->totalminpayments36months;
    }

    /**
     * @param null | int $totalminpayments36months
     * @return static
     */
    public function withTotalminpayments36months(?int $totalminpayments36months): static
    {
        $new = clone $this;
        $new->totalminpayments36months = $totalminpayments36months;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalvaluecashadvances12months(): ?int
    {
        return $this->totalvaluecashadvances12months;
    }

    /**
     * @param null | int $totalvaluecashadvances12months
     * @return static
     */
    public function withTotalvaluecashadvances12months(?int $totalvaluecashadvances12months): static
    {
        $new = clone $this;
        $new->totalvaluecashadvances12months = $totalvaluecashadvances12months;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalvaluecashadvances36months(): ?int
    {
        return $this->totalvaluecashadvances36months;
    }

    /**
     * @param null | int $totalvaluecashadvances36months
     * @return static
     */
    public function withTotalvaluecashadvances36months(?int $totalvaluecashadvances36months): static
    {
        $new = clone $this;
        $new->totalvaluecashadvances36months = $totalvaluecashadvances36months;

        return $new;
    }
}

