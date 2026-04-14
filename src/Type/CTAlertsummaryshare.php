<?php

namespace PaymentAssist\Type;

class CTAlertsummaryshare
{
    /**
     * Total number of SHARE Accounts
     *
     * @var null | int
     */
    private ?int $totalaccounts = null;

    /**
     * Total number of active SHARE Accounts
     *
     * @var null | int
     */
    private ?int $totalactiveaccounts = null;

    /**
     * Total value of active SHARE Accounts
     *
     * @var null | int
     */
    private ?int $totalactiveaccountsamount = null;

    /**
     * Total number of SHARE Accounts with zero balance
     *
     * @var null | int
     */
    private ?int $totalaccountszerobal = null;

    /**
     * Total value of settled SHARE Accounts
     *
     * @var null | int
     */
    private ?int $totalsettledaccountsamount = null;

    /**
     * Worst payment status on SHARE Accounts in the last 12 months
     * The list of possible values can be obtained from the web method LookupData07a table id = payment
     *
     * @var null | string
     */
    private ?string $worsepaystatus12m = null;

    /**
     * Worst payment status on SHARE Accounts in the last 24 months
     * The list of possible values can be obtained from the web method LookupData07a table id = payment
     *
     * @var null | string
     */
    private ?string $worsepaystatus24m = null;

    /**
     * Total number of SHARE Accounts in default
     *
     * @var int
     */
    private int $totaldefaults;

    /**
     * Total number of SHARE Accounts that have defaulted in the last 12 months
     *
     * @var int
     */
    private int $totaldefaults12m;

    /**
     * Total number of SHARE Accounts that have been satisifed
     *
     * @var int
     */
    private int $totalsettleddefaults;

    /**
     * Total value of SHARE Accounts in default
     *
     * @var int
     */
    private int $totaldefaultsamount;

    /**
     * Total number of SHARE Accounts that have been written off
     *
     * @var int
     */
    private int $totalwriteoffs;

    /**
     * Total value of SHARE Accounts that have been written off
     *
     * @var int
     */
    private int $totalwriteoffsamount;

    /**
     * Total number of delinquent SHARE Accounts
     *
     * @var null | int
     */
    private ?int $totaldelinqs = null;

    /**
     * Total value of delinquent SHARE Accounts
     *
     * @var null | int
     */
    private ?int $totaldelinqsamount = null;

    /**
     * @return null | int
     */
    public function getTotalaccounts(): ?int
    {
        return $this->totalaccounts;
    }

    /**
     * @param null | int $totalaccounts
     * @return static
     */
    public function withTotalaccounts(?int $totalaccounts): static
    {
        $new = clone $this;
        $new->totalaccounts = $totalaccounts;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalactiveaccounts(): ?int
    {
        return $this->totalactiveaccounts;
    }

    /**
     * @param null | int $totalactiveaccounts
     * @return static
     */
    public function withTotalactiveaccounts(?int $totalactiveaccounts): static
    {
        $new = clone $this;
        $new->totalactiveaccounts = $totalactiveaccounts;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalactiveaccountsamount(): ?int
    {
        return $this->totalactiveaccountsamount;
    }

    /**
     * @param null | int $totalactiveaccountsamount
     * @return static
     */
    public function withTotalactiveaccountsamount(?int $totalactiveaccountsamount): static
    {
        $new = clone $this;
        $new->totalactiveaccountsamount = $totalactiveaccountsamount;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalaccountszerobal(): ?int
    {
        return $this->totalaccountszerobal;
    }

    /**
     * @param null | int $totalaccountszerobal
     * @return static
     */
    public function withTotalaccountszerobal(?int $totalaccountszerobal): static
    {
        $new = clone $this;
        $new->totalaccountszerobal = $totalaccountszerobal;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalsettledaccountsamount(): ?int
    {
        return $this->totalsettledaccountsamount;
    }

    /**
     * @param null | int $totalsettledaccountsamount
     * @return static
     */
    public function withTotalsettledaccountsamount(?int $totalsettledaccountsamount): static
    {
        $new = clone $this;
        $new->totalsettledaccountsamount = $totalsettledaccountsamount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWorsepaystatus12m(): ?string
    {
        return $this->worsepaystatus12m;
    }

    /**
     * @param null | string $worsepaystatus12m
     * @return static
     */
    public function withWorsepaystatus12m(?string $worsepaystatus12m): static
    {
        $new = clone $this;
        $new->worsepaystatus12m = $worsepaystatus12m;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWorsepaystatus24m(): ?string
    {
        return $this->worsepaystatus24m;
    }

    /**
     * @param null | string $worsepaystatus24m
     * @return static
     */
    public function withWorsepaystatus24m(?string $worsepaystatus24m): static
    {
        $new = clone $this;
        $new->worsepaystatus24m = $worsepaystatus24m;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaults(): int
    {
        return $this->totaldefaults;
    }

    /**
     * @param int $totaldefaults
     * @return static
     */
    public function withTotaldefaults(int $totaldefaults): static
    {
        $new = clone $this;
        $new->totaldefaults = $totaldefaults;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaults12m(): int
    {
        return $this->totaldefaults12m;
    }

    /**
     * @param int $totaldefaults12m
     * @return static
     */
    public function withTotaldefaults12m(int $totaldefaults12m): static
    {
        $new = clone $this;
        $new->totaldefaults12m = $totaldefaults12m;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalsettleddefaults(): int
    {
        return $this->totalsettleddefaults;
    }

    /**
     * @param int $totalsettleddefaults
     * @return static
     */
    public function withTotalsettleddefaults(int $totalsettleddefaults): static
    {
        $new = clone $this;
        $new->totalsettleddefaults = $totalsettleddefaults;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldefaultsamount(): int
    {
        return $this->totaldefaultsamount;
    }

    /**
     * @param int $totaldefaultsamount
     * @return static
     */
    public function withTotaldefaultsamount(int $totaldefaultsamount): static
    {
        $new = clone $this;
        $new->totaldefaultsamount = $totaldefaultsamount;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalwriteoffs(): int
    {
        return $this->totalwriteoffs;
    }

    /**
     * @param int $totalwriteoffs
     * @return static
     */
    public function withTotalwriteoffs(int $totalwriteoffs): static
    {
        $new = clone $this;
        $new->totalwriteoffs = $totalwriteoffs;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalwriteoffsamount(): int
    {
        return $this->totalwriteoffsamount;
    }

    /**
     * @param int $totalwriteoffsamount
     * @return static
     */
    public function withTotalwriteoffsamount(int $totalwriteoffsamount): static
    {
        $new = clone $this;
        $new->totalwriteoffsamount = $totalwriteoffsamount;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotaldelinqs(): ?int
    {
        return $this->totaldelinqs;
    }

    /**
     * @param null | int $totaldelinqs
     * @return static
     */
    public function withTotaldelinqs(?int $totaldelinqs): static
    {
        $new = clone $this;
        $new->totaldelinqs = $totaldelinqs;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotaldelinqsamount(): ?int
    {
        return $this->totaldelinqsamount;
    }

    /**
     * @param null | int $totaldelinqsamount
     * @return static
     */
    public function withTotaldelinqsamount(?int $totaldelinqsamount): static
    {
        $new = clone $this;
        $new->totaldelinqsamount = $totaldelinqsamount;

        return $new;
    }
}

