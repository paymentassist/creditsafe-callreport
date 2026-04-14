<?php

namespace PaymentAssist\Type;

class CTDemographicsexpenditure
{
    /**
     * Total number of cheque of debit cards linked directly to the customer's bank account
     *
     * @var null | int
     */
    private ?int $totaldebitcards = null;

    /**
     * Total number of credit or charge cards used to purchase goods and services on credit
     *
     * @var null | int
     */
    private ?int $totalcreditcards = null;

    /**
     * Monthly unsecured financial obligation owed to creditors
     *
     * @var null | int
     */
    private ?int $monthlyunsecuredamount = null;

    /**
     * @return null | int
     */
    public function getTotaldebitcards(): ?int
    {
        return $this->totaldebitcards;
    }

    /**
     * @param null | int $totaldebitcards
     * @return static
     */
    public function withTotaldebitcards(?int $totaldebitcards): static
    {
        $new = clone $this;
        $new->totaldebitcards = $totaldebitcards;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalcreditcards(): ?int
    {
        return $this->totalcreditcards;
    }

    /**
     * @param null | int $totalcreditcards
     * @return static
     */
    public function withTotalcreditcards(?int $totalcreditcards): static
    {
        $new = clone $this;
        $new->totalcreditcards = $totalcreditcards;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMonthlyunsecuredamount(): ?int
    {
        return $this->monthlyunsecuredamount;
    }

    /**
     * @param null | int $monthlyunsecuredamount
     * @return static
     */
    public function withMonthlyunsecuredamount(?int $monthlyunsecuredamount): static
    {
        $new = clone $this;
        $new->monthlyunsecuredamount = $monthlyunsecuredamount;

        return $new;
    }
}

