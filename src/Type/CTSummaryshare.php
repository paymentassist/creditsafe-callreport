<?php

namespace PaymentAssist\Type;

class CTSummaryshare
{
    /**
     * Total number of SHARE Accounts
     *
     * @var int
     */
    private int $totalaccounts;

    /**
     * Total number of active SHARE Accounts.
     *
     * @var null | int
     */
    private ?int $totalactiveaccs = null;

    /**
     * Total number of settled SHARE Accounts.
     *
     * @var null | int
     */
    private ?int $totalsettledaccs = null;

    /**
     * Total number of SHARE Accounts opened in the last 6 months.
     *
     * @var int
     */
    private int $totalopened6months;

    /**
     * Worst payment status on SHARE Accounts in the last 12 months
     * The list of possible values can be obtained from the web method LookupData07a table id = payment
     *
     * @var null | string
     */
    private ?string $worsepaystatus12months = null;

    /**
     * Worst payment status on SHARE Accounts in the last 36 months
     * The list of possible values can be obtained from the web method LookupData07a table id = payment
     *
     * @var null | string
     */
    private ?string $worsepaystatus36months = null;

    /**
     * Total number of delinquent SHARE Accounts in the last 12 months
     *
     * @var null | int
     */
    private ?int $totaldelinqs12months = null;

    /**
     * Total number of SHARE Accounts that have defaulted in last 12 months
     *
     * @var int
     */
    private int $totaldefaults12months;

    /**
     * Total number of SHARE Accounts that have defaulted in the last 36 months
     *
     * @var int
     */
    private int $totaldefaults36months;

    /**
     * @return int
     */
    public function getTotalaccounts() : int
    {
        return $this->totalaccounts;
    }

    /**
     * @param int $totalaccounts
     * @return static
     */
    public function withTotalaccounts(int $totalaccounts) : static
    {
        $new = clone $this;
        $new->totalaccounts = $totalaccounts;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalactiveaccs() : ?int
    {
        return $this->totalactiveaccs;
    }

    /**
     * @param null | int $totalactiveaccs
     * @return static
     */
    public function withTotalactiveaccs(?int $totalactiveaccs) : static
    {
        $new = clone $this;
        $new->totalactiveaccs = $totalactiveaccs;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalsettledaccs() : ?int
    {
        return $this->totalsettledaccs;
    }

    /**
     * @param null | int $totalsettledaccs
     * @return static
     */
    public function withTotalsettledaccs(?int $totalsettledaccs) : static
    {
        $new = clone $this;
        $new->totalsettledaccs = $totalsettledaccs;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalopened6months() : int
    {
        return $this->totalopened6months;
    }

    /**
     * @param int $totalopened6months
     * @return static
     */
    public function withTotalopened6months(int $totalopened6months) : static
    {
        $new = clone $this;
        $new->totalopened6months = $totalopened6months;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWorsepaystatus12months() : ?string
    {
        return $this->worsepaystatus12months;
    }

    /**
     * @param null | string $worsepaystatus12months
     * @return static
     */
    public function withWorsepaystatus12months(?string $worsepaystatus12months) : static
    {
        $new = clone $this;
        $new->worsepaystatus12months = $worsepaystatus12months;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWorsepaystatus36months() : ?string
    {
        return $this->worsepaystatus36months;
    }

    /**
     * @param null | string $worsepaystatus36months
     * @return static
     */
    public function withWorsepaystatus36months(?string $worsepaystatus36months) : static
    {
        $new = clone $this;
        $new->worsepaystatus36months = $worsepaystatus36months;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotaldelinqs12months() : ?int
    {
        return $this->totaldelinqs12months;
    }

    /**
     * @param null | int $totaldelinqs12months
     * @return static
     */
    public function withTotaldelinqs12months(?int $totaldelinqs12months) : static
    {
        $new = clone $this;
        $new->totaldelinqs12months = $totaldelinqs12months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaults12months() : int
    {
        return $this->totaldefaults12months;
    }

    /**
     * @param int $totaldefaults12months
     * @return static
     */
    public function withTotaldefaults12months(int $totaldefaults12months) : static
    {
        $new = clone $this;
        $new->totaldefaults12months = $totaldefaults12months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaults36months() : int
    {
        return $this->totaldefaults36months;
    }

    /**
     * @param int $totaldefaults36months
     * @return static
     */
    public function withTotaldefaults36months(int $totaldefaults36months) : static
    {
        $new = clone $this;
        $new->totaldefaults36months = $totaldefaults36months;

        return $new;
    }
}

