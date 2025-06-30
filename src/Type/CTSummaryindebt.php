<?php

namespace PaymentAssist\Type;

class CTSummaryindebt
{
    /**
     * Total balances for all active Accounts
     *
     * @var null | int
     */
    private ?int $totalbalancesactive = null;

    /**
     * Total balances for all account group 3 Accounts (Revolving Credit and Budget)
     *
     * @var null | int
     */
    private ?int $totalbalancesrevolve = null;

    /**
     * % ratio of balance to limits for all account group 3 Accounts (Revolving Credit and Budget)
     *
     * @var null | int
     */
    private ?int $balancelimitratiorevolve = null;

    /**
     * Total limits for all active account group 3 Accounts (Revolving Credit and Budget)
     *
     * @var null | int
     */
    private ?int $totallimitsrevolve = null;

    /**
     * Total balances for all account group 1 accounts (Loans/Installment Credit)
     *
     * @var null | int
     */
    private ?int $totalbalancesloans = null;

    /**
     * Total balances for all account group 2 accounts (Mortgage Accounts)
     *
     * @var null | int
     */
    private ?int $totalbalancesmortgages = null;

    /**
     * @return null | int
     */
    public function getTotalbalancesactive() : ?int
    {
        return $this->totalbalancesactive;
    }

    /**
     * @param null | int $totalbalancesactive
     * @return static
     */
    public function withTotalbalancesactive(?int $totalbalancesactive) : static
    {
        $new = clone $this;
        $new->totalbalancesactive = $totalbalancesactive;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalbalancesrevolve() : ?int
    {
        return $this->totalbalancesrevolve;
    }

    /**
     * @param null | int $totalbalancesrevolve
     * @return static
     */
    public function withTotalbalancesrevolve(?int $totalbalancesrevolve) : static
    {
        $new = clone $this;
        $new->totalbalancesrevolve = $totalbalancesrevolve;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getBalancelimitratiorevolve() : ?int
    {
        return $this->balancelimitratiorevolve;
    }

    /**
     * @param null | int $balancelimitratiorevolve
     * @return static
     */
    public function withBalancelimitratiorevolve(?int $balancelimitratiorevolve) : static
    {
        $new = clone $this;
        $new->balancelimitratiorevolve = $balancelimitratiorevolve;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotallimitsrevolve() : ?int
    {
        return $this->totallimitsrevolve;
    }

    /**
     * @param null | int $totallimitsrevolve
     * @return static
     */
    public function withTotallimitsrevolve(?int $totallimitsrevolve) : static
    {
        $new = clone $this;
        $new->totallimitsrevolve = $totallimitsrevolve;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalbalancesloans() : ?int
    {
        return $this->totalbalancesloans;
    }

    /**
     * @param null | int $totalbalancesloans
     * @return static
     */
    public function withTotalbalancesloans(?int $totalbalancesloans) : static
    {
        $new = clone $this;
        $new->totalbalancesloans = $totalbalancesloans;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalbalancesmortgages() : ?int
    {
        return $this->totalbalancesmortgages;
    }

    /**
     * @param null | int $totalbalancesmortgages
     * @return static
     */
    public function withTotalbalancesmortgages(?int $totalbalancesmortgages) : static
    {
        $new = clone $this;
        $new->totalbalancesmortgages = $totalbalancesmortgages;

        return $new;
    }
}

