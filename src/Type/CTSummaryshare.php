<?php

namespace PaymentAssist\Type;

class CTSummaryshare
{

    /**
     * @var int
     */
    private $totalaccounts;

    /**
     * @var int
     */
    private $totalactiveaccs;

    /**
     * @var int
     */
    private $totalsettledaccs;

    /**
     * @var int
     */
    private $totalopened6months;

    /**
     * @var string
     */
    private $worsepaystatus12months;

    /**
     * @var string
     */
    private $worsepaystatus36months;

    /**
     * @var int
     */
    private $totaldelinqs12months;

    /**
     * @var int
     */
    private $totaldefaults12months;

    /**
     * @var int
     */
    private $totaldefaults36months;

    /**
     * @return int
     */
    public function getTotalaccounts()
    {
        return $this->totalaccounts;
    }

    /**
     * @param int $totalaccounts
     * @return CTSummaryshare
     */
    public function withTotalaccounts($totalaccounts)
    {
        $new = clone $this;
        $new->totalaccounts = $totalaccounts;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalactiveaccs()
    {
        return $this->totalactiveaccs;
    }

    /**
     * @param int $totalactiveaccs
     * @return CTSummaryshare
     */
    public function withTotalactiveaccs($totalactiveaccs)
    {
        $new = clone $this;
        $new->totalactiveaccs = $totalactiveaccs;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalsettledaccs()
    {
        return $this->totalsettledaccs;
    }

    /**
     * @param int $totalsettledaccs
     * @return CTSummaryshare
     */
    public function withTotalsettledaccs($totalsettledaccs)
    {
        $new = clone $this;
        $new->totalsettledaccs = $totalsettledaccs;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalopened6months()
    {
        return $this->totalopened6months;
    }

    /**
     * @param int $totalopened6months
     * @return CTSummaryshare
     */
    public function withTotalopened6months($totalopened6months)
    {
        $new = clone $this;
        $new->totalopened6months = $totalopened6months;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorsepaystatus12months()
    {
        return $this->worsepaystatus12months;
    }

    /**
     * @param string $worsepaystatus12months
     * @return CTSummaryshare
     */
    public function withWorsepaystatus12months($worsepaystatus12months)
    {
        $new = clone $this;
        $new->worsepaystatus12months = $worsepaystatus12months;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorsepaystatus36months()
    {
        return $this->worsepaystatus36months;
    }

    /**
     * @param string $worsepaystatus36months
     * @return CTSummaryshare
     */
    public function withWorsepaystatus36months($worsepaystatus36months)
    {
        $new = clone $this;
        $new->worsepaystatus36months = $worsepaystatus36months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldelinqs12months()
    {
        return $this->totaldelinqs12months;
    }

    /**
     * @param int $totaldelinqs12months
     * @return CTSummaryshare
     */
    public function withTotaldelinqs12months($totaldelinqs12months)
    {
        $new = clone $this;
        $new->totaldelinqs12months = $totaldelinqs12months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaults12months()
    {
        return $this->totaldefaults12months;
    }

    /**
     * @param int $totaldefaults12months
     * @return CTSummaryshare
     */
    public function withTotaldefaults12months($totaldefaults12months)
    {
        $new = clone $this;
        $new->totaldefaults12months = $totaldefaults12months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaults36months()
    {
        return $this->totaldefaults36months;
    }

    /**
     * @param int $totaldefaults36months
     * @return CTSummaryshare
     */
    public function withTotaldefaults36months($totaldefaults36months)
    {
        $new = clone $this;
        $new->totaldefaults36months = $totaldefaults36months;

        return $new;
    }


}

