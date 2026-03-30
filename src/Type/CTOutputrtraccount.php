<?php

namespace PaymentAssist\Type;

class CTOutputrtraccount
{
    /**
     * Account holder related details
     *
     * @var \PaymentAssist\Type\CTOutputrtraccountHolder
     */
    private \PaymentAssist\Type\CTOutputrtraccountHolder $holder;

    /**
     * Organisation type code
     * The list of possible values can be obtained from the web method LookupData07a table id = suppliertype
     *
     * @var string
     */
    private string $orgtypecode;

    /**
     * Organisation name (own data only)
     *
     * @var null | string
     */
    private ?string $orgname = null;

    /**
     * Account number (own data only)
     *
     * @var null | string
     */
    private ?string $accnum = null;

    /**
     * Account suffix code
     *
     * @var null | int
     */
    private ?int $accsuffix = null;

    /**
     * Account type code
     * The list of possible values can be obtained from the web method LookupData07a table id = acctype
     *
     * @var string
     */
    private string $acctypecode;

    /**
     * Current balance on account
     *
     * @var int
     */
    private int $balance;

    /**
     * Current credit limit on Account
     *
     * @var null | int
     */
    private ?int $limit = null;

    /**
     * Account start date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $startdate = null;

    /**
     * Account closed date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $enddate = null;

    /**
     * Account status code
     * The list of possible values can be obtained from the web method LookupData07a table id = accstatus
     *
     * @var string
     */
    private string $accstatuscode;

    /**
     * Repayment frequency code
     * The list of possible values can be obtained from the web method LookupData07a table id = paymentfrequency
     *
     * @var null | string
     */
    private ?string $repayfreqcode = null;

    /**
     * Number overdue payments
     *
     * @var null | int
     */
    private ?int $numoverdue = null;

    /**
     * A value of 1 indicates that the Account is rolled over
     *
     * @var int
     */
    private int $rollover;

    /**
     * A value of 1 indicates that credit has been extended
     *
     * @var int
     */
    private int $creditext;

    /**
     * A value of 1 indicates that there has been a change to payment terms.
     *
     * @var int
     */
    private int $changepay;

    /**
     * The value of the next due payment.
     *
     * @var null | int
     */
    private ?int $nextpayamount = null;

    /**
     * Set of Dispute and Correction Notices against an Account
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * The time stamp of publication from the data supplier’s system
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $updated;

    /**
     * @return \PaymentAssist\Type\CTOutputrtraccountHolder
     */
    public function getHolder(): \PaymentAssist\Type\CTOutputrtraccountHolder
    {
        return $this->holder;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputrtraccountHolder $holder
     * @return static
     */
    public function withHolder(\PaymentAssist\Type\CTOutputrtraccountHolder $holder): static
    {
        $new = clone $this;
        $new->holder = $holder;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrgtypecode(): string
    {
        return $this->orgtypecode;
    }

    /**
     * @param string $orgtypecode
     * @return static
     */
    public function withOrgtypecode(string $orgtypecode): static
    {
        $new = clone $this;
        $new->orgtypecode = $orgtypecode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOrgname(): ?string
    {
        return $this->orgname;
    }

    /**
     * @param null | string $orgname
     * @return static
     */
    public function withOrgname(?string $orgname): static
    {
        $new = clone $this;
        $new->orgname = $orgname;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccnum(): ?string
    {
        return $this->accnum;
    }

    /**
     * @param null | string $accnum
     * @return static
     */
    public function withAccnum(?string $accnum): static
    {
        $new = clone $this;
        $new->accnum = $accnum;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAccsuffix(): ?int
    {
        return $this->accsuffix;
    }

    /**
     * @param null | int $accsuffix
     * @return static
     */
    public function withAccsuffix(?int $accsuffix): static
    {
        $new = clone $this;
        $new->accsuffix = $accsuffix;

        return $new;
    }

    /**
     * @return string
     */
    public function getAcctypecode(): string
    {
        return $this->acctypecode;
    }

    /**
     * @param string $acctypecode
     * @return static
     */
    public function withAcctypecode(string $acctypecode): static
    {
        $new = clone $this;
        $new->acctypecode = $acctypecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     * @return static
     */
    public function withBalance(int $balance): static
    {
        $new = clone $this;
        $new->balance = $balance;

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
     * @return null | \DateTimeInterface
     */
    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    /**
     * @param null | \DateTimeInterface $startdate
     * @return static
     */
    public function withStartdate(?\DateTimeInterface $startdate): static
    {
        $new = clone $this;
        $new->startdate = $startdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    /**
     * @param null | \DateTimeInterface $enddate
     * @return static
     */
    public function withEnddate(?\DateTimeInterface $enddate): static
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccstatuscode(): string
    {
        return $this->accstatuscode;
    }

    /**
     * @param string $accstatuscode
     * @return static
     */
    public function withAccstatuscode(string $accstatuscode): static
    {
        $new = clone $this;
        $new->accstatuscode = $accstatuscode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRepayfreqcode(): ?string
    {
        return $this->repayfreqcode;
    }

    /**
     * @param null | string $repayfreqcode
     * @return static
     */
    public function withRepayfreqcode(?string $repayfreqcode): static
    {
        $new = clone $this;
        $new->repayfreqcode = $repayfreqcode;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNumoverdue(): ?int
    {
        return $this->numoverdue;
    }

    /**
     * @param null | int $numoverdue
     * @return static
     */
    public function withNumoverdue(?int $numoverdue): static
    {
        $new = clone $this;
        $new->numoverdue = $numoverdue;

        return $new;
    }

    /**
     * @return int
     */
    public function getRollover(): int
    {
        return $this->rollover;
    }

    /**
     * @param int $rollover
     * @return static
     */
    public function withRollover(int $rollover): static
    {
        $new = clone $this;
        $new->rollover = $rollover;

        return $new;
    }

    /**
     * @return int
     */
    public function getCreditext(): int
    {
        return $this->creditext;
    }

    /**
     * @param int $creditext
     * @return static
     */
    public function withCreditext(int $creditext): static
    {
        $new = clone $this;
        $new->creditext = $creditext;

        return $new;
    }

    /**
     * @return int
     */
    public function getChangepay(): int
    {
        return $this->changepay;
    }

    /**
     * @param int $changepay
     * @return static
     */
    public function withChangepay(int $changepay): static
    {
        $new = clone $this;
        $new->changepay = $changepay;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNextpayamount(): ?int
    {
        return $this->nextpayamount;
    }

    /**
     * @param null | int $nextpayamount
     * @return static
     */
    public function withNextpayamount(?int $nextpayamount): static
    {
        $new = clone $this;
        $new->nextpayamount = $nextpayamount;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    public function getNotice(): array
    {
        return $this->notice;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputnotice> $notice
     * @return static
     */
    public function withNotice(array $notice): static
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdated(): \DateTimeInterface
    {
        return $this->updated;
    }

    /**
     * @param \DateTimeInterface $updated
     * @return static
     */
    public function withUpdated(\DateTimeInterface $updated): static
    {
        $new = clone $this;
        $new->updated = $updated;

        return $new;
    }
}

