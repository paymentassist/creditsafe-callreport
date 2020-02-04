<?php

namespace PaymentAssist\Type;

class CTAlertsummaryshare
{

    /**
     * @var int
     */
    private $totalaccounts;

    /**
     * @var int
     */
    private $totalactiveaccounts;

    /**
     * @var int
     */
    private $totalactiveaccountsamount;

    /**
     * @var int
     */
    private $totalaccountszerobal;

    /**
     * @var int
     */
    private $totalsettledaccountsamount;

    /**
     * @var string
     */
    private $worsepaystatus12m;

    /**
     * @var string
     */
    private $worsepaystatus24m;

    /**
     * @var int
     */
    private $totaldefaults;

    /**
     * @var int
     */
    private $totaldefaults12m;

    /**
     * @var int
     */
    private $totalsettleddefaults;

    /**
     * @var int
     */
    private $totaldefaultsamount;

    /**
     * @var int
     */
    private $totalwriteoffs;

    /**
     * @var int
     */
    private $totalwriteoffsamount;

    /**
     * @var int
     */
    private $totaldelinqs;

    /**
     * @var int
     */
    private $totaldelinqsamount;

    /**
     * @return int
     */
    public function getTotalaccounts()
    {
        return $this->totalaccounts;
    }

    /**
     * @param int $totalaccounts
     * @return CTAlertsummaryshare
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
    public function getTotalactiveaccounts()
    {
        return $this->totalactiveaccounts;
    }

    /**
     * @param int $totalactiveaccounts
     * @return CTAlertsummaryshare
     */
    public function withTotalactiveaccounts($totalactiveaccounts)
    {
        $new = clone $this;
        $new->totalactiveaccounts = $totalactiveaccounts;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalactiveaccountsamount()
    {
        return $this->totalactiveaccountsamount;
    }

    /**
     * @param int $totalactiveaccountsamount
     * @return CTAlertsummaryshare
     */
    public function withTotalactiveaccountsamount($totalactiveaccountsamount)
    {
        $new = clone $this;
        $new->totalactiveaccountsamount = $totalactiveaccountsamount;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalaccountszerobal()
    {
        return $this->totalaccountszerobal;
    }

    /**
     * @param int $totalaccountszerobal
     * @return CTAlertsummaryshare
     */
    public function withTotalaccountszerobal($totalaccountszerobal)
    {
        $new = clone $this;
        $new->totalaccountszerobal = $totalaccountszerobal;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalsettledaccountsamount()
    {
        return $this->totalsettledaccountsamount;
    }

    /**
     * @param int $totalsettledaccountsamount
     * @return CTAlertsummaryshare
     */
    public function withTotalsettledaccountsamount($totalsettledaccountsamount)
    {
        $new = clone $this;
        $new->totalsettledaccountsamount = $totalsettledaccountsamount;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorsepaystatus12m()
    {
        return $this->worsepaystatus12m;
    }

    /**
     * @param string $worsepaystatus12m
     * @return CTAlertsummaryshare
     */
    public function withWorsepaystatus12m($worsepaystatus12m)
    {
        $new = clone $this;
        $new->worsepaystatus12m = $worsepaystatus12m;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorsepaystatus24m()
    {
        return $this->worsepaystatus24m;
    }

    /**
     * @param string $worsepaystatus24m
     * @return CTAlertsummaryshare
     */
    public function withWorsepaystatus24m($worsepaystatus24m)
    {
        $new = clone $this;
        $new->worsepaystatus24m = $worsepaystatus24m;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaults()
    {
        return $this->totaldefaults;
    }

    /**
     * @param int $totaldefaults
     * @return CTAlertsummaryshare
     */
    public function withTotaldefaults($totaldefaults)
    {
        $new = clone $this;
        $new->totaldefaults = $totaldefaults;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaults12m()
    {
        return $this->totaldefaults12m;
    }

    /**
     * @param int $totaldefaults12m
     * @return CTAlertsummaryshare
     */
    public function withTotaldefaults12m($totaldefaults12m)
    {
        $new = clone $this;
        $new->totaldefaults12m = $totaldefaults12m;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalsettleddefaults()
    {
        return $this->totalsettleddefaults;
    }

    /**
     * @param int $totalsettleddefaults
     * @return CTAlertsummaryshare
     */
    public function withTotalsettleddefaults($totalsettleddefaults)
    {
        $new = clone $this;
        $new->totalsettleddefaults = $totalsettleddefaults;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaultsamount()
    {
        return $this->totaldefaultsamount;
    }

    /**
     * @param int $totaldefaultsamount
     * @return CTAlertsummaryshare
     */
    public function withTotaldefaultsamount($totaldefaultsamount)
    {
        $new = clone $this;
        $new->totaldefaultsamount = $totaldefaultsamount;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalwriteoffs()
    {
        return $this->totalwriteoffs;
    }

    /**
     * @param int $totalwriteoffs
     * @return CTAlertsummaryshare
     */
    public function withTotalwriteoffs($totalwriteoffs)
    {
        $new = clone $this;
        $new->totalwriteoffs = $totalwriteoffs;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalwriteoffsamount()
    {
        return $this->totalwriteoffsamount;
    }

    /**
     * @param int $totalwriteoffsamount
     * @return CTAlertsummaryshare
     */
    public function withTotalwriteoffsamount($totalwriteoffsamount)
    {
        $new = clone $this;
        $new->totalwriteoffsamount = $totalwriteoffsamount;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldelinqs()
    {
        return $this->totaldelinqs;
    }

    /**
     * @param int $totaldelinqs
     * @return CTAlertsummaryshare
     */
    public function withTotaldelinqs($totaldelinqs)
    {
        $new = clone $this;
        $new->totaldelinqs = $totaldelinqs;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldelinqsamount()
    {
        return $this->totaldelinqsamount;
    }

    /**
     * @param int $totaldelinqsamount
     * @return CTAlertsummaryshare
     */
    public function withTotaldelinqsamount($totaldelinqsamount)
    {
        $new = clone $this;
        $new->totaldelinqsamount = $totaldelinqsamount;

        return $new;
    }


}

