<?php

namespace PaymentAssist\Type;

class CTOutputshareaccountAh
{
    /**
     * Year and month that history record applies to
     *
     * @var string
     */
    private string $m;

    /**
     * Balance amount for account history record
     *
     * @var null | int
     */
    private ?int $bal = null;

    /**
     * Credit limit for account history record
     *
     * @var null | int
     */
    private ?int $limit = null;

    /**
     * Account status code for account history record
     * The list of possible values can be obtained from the web method LookupData07a table id = accountstatuscode
     *
     * @var string
     */
    private string $acc;

    /**
     * Payment status code for account history record
     * The list of possible values can be obtained from the web method LookupData07a table id = payment
     *
     * @var null | string
     */
    private ?string $pay = null;

    /**
     * Statement balance amount for account history record (returned only to customers who are authorised to see Behavoural Data)
     *
     * @var null | int
     */
    private ?int $stmtbal = null;

    /**
     * Payment amount for account history record (returned only to customers who are authorised to see Behavoural Data)
     *
     * @var null | int
     */
    private ?int $payamt = null;

    /**
     * The number of cash advances for account history record (returned only to customers who are authorised to see Behavoural Data)
     *
     * @var null | int
     */
    private ?int $cashadvcount = null;

    /**
     * Total value of cash advances for account history record (returned only to customers who are authorised to see Behavoural Data)
     *
     * @var null | int
     */
    private ?int $cashadvtotal = null;

    /**
     * @return string
     */
    public function getM(): string
    {
        return $this->m;
    }

    /**
     * @param string $m
     * @return static
     */
    public function withM(string $m): static
    {
        $new = clone $this;
        $new->m = $m;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getBal(): ?int
    {
        return $this->bal;
    }

    /**
     * @param null | int $bal
     * @return static
     */
    public function withBal(?int $bal): static
    {
        $new = clone $this;
        $new->bal = $bal;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param null | int $limit
     * @return static
     */
    public function withLimit(?int $limit): static
    {
        $new = clone $this;
        $new->limit = $limit;

        return $new;
    }

    /**
     * @return string
     */
    public function getAcc(): string
    {
        return $this->acc;
    }

    /**
     * @param string $acc
     * @return static
     */
    public function withAcc(string $acc): static
    {
        $new = clone $this;
        $new->acc = $acc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPay(): ?string
    {
        return $this->pay;
    }

    /**
     * @param null | string $pay
     * @return static
     */
    public function withPay(?string $pay): static
    {
        $new = clone $this;
        $new->pay = $pay;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getStmtbal(): ?int
    {
        return $this->stmtbal;
    }

    /**
     * @param null | int $stmtbal
     * @return static
     */
    public function withStmtbal(?int $stmtbal): static
    {
        $new = clone $this;
        $new->stmtbal = $stmtbal;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPayamt(): ?int
    {
        return $this->payamt;
    }

    /**
     * @param null | int $payamt
     * @return static
     */
    public function withPayamt(?int $payamt): static
    {
        $new = clone $this;
        $new->payamt = $payamt;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCashadvcount(): ?int
    {
        return $this->cashadvcount;
    }

    /**
     * @param null | int $cashadvcount
     * @return static
     */
    public function withCashadvcount(?int $cashadvcount): static
    {
        $new = clone $this;
        $new->cashadvcount = $cashadvcount;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCashadvtotal(): ?int
    {
        return $this->cashadvtotal;
    }

    /**
     * @param null | int $cashadvtotal
     * @return static
     */
    public function withCashadvtotal(?int $cashadvtotal): static
    {
        $new = clone $this;
        $new->cashadvtotal = $cashadvtotal;

        return $new;
    }
}

