<?php

namespace PaymentAssist\Type;

class CTOutputshareaccountAccdetails
{
    /**
     * Account number (own data only)
     *
     * @var null | string
     */
    private ?string $accno = null;

    /**
     * Account suffix code
     *
     * @var null | int
     */
    private ?int $accsuffix = null;

    /**
     * A value of 1 indicates that this is a joint Account
     *
     * @var int
     */
    private int $joint;

    /**
     * Status of Account
     * The list of possible values can be obtained from the web method LookupData07a table id = accountstatus
     *
     * @var string
     */
    private string $status;

    /**
     * Date that Account was last updated
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dateupdated = null;

    /**
     * Account type code
     * The list of possible values can be obtained from the web method LookupData07a table id = accounttype
     *
     * @var null | string
     */
    private ?string $acctypecode = null;

    /**
     * Account type group Identifier
     * The list of possible values can be obtained from the web method LookupData07a table id = accountgroup
     *
     * @var null | int
     */
    private ?int $accgroupid = null;

    /**
     * Currency code
     * The list of possible values can be obtained from the web method LookupData07a table id = currency
     *
     * @var string
     */
    private string $currencycode;

    /**
     * Current balance on account
     *
     * @var null | int
     */
    private ?int $balance = null;

    /**
     * Current credit limit on Account
     *
     * @var null | int
     */
    private ?int $limit = null;

    /**
     * Account opening balance
     *
     * @var null | int
     */
    private ?int $openbalance = null;

    /**
     * Arrangement start date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $arrstartdate = null;

    /**
     * Arrangement end date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $arrenddate = null;

    /**
     * Payment start date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $paystartdate = null;

    /**
     * Account start date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $accstartdate = null;

    /**
     * Account end date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $accenddate = null;

    /**
     * Regular payment value
     *
     * @var null | int
     */
    private ?int $regpayment = null;

    /**
     * Expected payment value
     *
     * @var null | int
     */
    private ?int $expectedpayment = null;

    /**
     * Actual payment value
     *
     * @var null | int
     */
    private ?int $actualpayment = null;

    /**
     * Repayment period
     *
     * @var null | int
     */
    private ?int $repayperiod = null;

    /**
     * Repayment frequency code
     * The list of possible values can be obtained from the web method LookupData07a table id = paymentfrequency
     *
     * @var string
     */
    private string $repayfreqcode;

    /**
     * Lump or balloon payment
     *
     * @var null | int
     */
    private ?int $lumppayment = null;

    /**
     * Penalty interest amount
     *
     * @var null | int
     */
    private ?int $penintamt = null;

    /**
     * A value of 1 indicates that a promotional rate applies (returned only to customers who are authorised to see Behavoural Data)
     *
     * @var null | int
     */
    private ?int $promotionalrate = null;

    /**
     * A value of 1 indicates that the minimum payment has been made within accepted tolerances (returned only to customers who are authorised to see Behavoural Data)
     *
     * @var null | int
     */
    private ?int $minimumpayment = null;

    /**
     * The balance at the statement date (returned only to customers who are authorised to see Behavoural Data)
     *
     * @var null | int
     */
    private ?int $statementbalance = null;

    /**
     * @return null | string
     */
    public function getAccno(): ?string
    {
        return $this->accno;
    }

    /**
     * @param null | string $accno
     * @return static
     */
    public function withAccno(?string $accno): static
    {
        $new = clone $this;
        $new->accno = $accno;

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
     * @return int
     */
    public function getJoint(): int
    {
        return $this->joint;
    }

    /**
     * @param int $joint
     * @return static
     */
    public function withJoint(int $joint): static
    {
        $new = clone $this;
        $new->joint = $joint;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return static
     */
    public function withStatus(string $status): static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDateupdated(): ?\DateTimeInterface
    {
        return $this->dateupdated;
    }

    /**
     * @param null | \DateTimeInterface $dateupdated
     * @return static
     */
    public function withDateupdated(?\DateTimeInterface $dateupdated): static
    {
        $new = clone $this;
        $new->dateupdated = $dateupdated;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAcctypecode(): ?string
    {
        return $this->acctypecode;
    }

    /**
     * @param null | string $acctypecode
     * @return static
     */
    public function withAcctypecode(?string $acctypecode): static
    {
        $new = clone $this;
        $new->acctypecode = $acctypecode;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAccgroupid(): ?int
    {
        return $this->accgroupid;
    }

    /**
     * @param null | int $accgroupid
     * @return static
     */
    public function withAccgroupid(?int $accgroupid): static
    {
        $new = clone $this;
        $new->accgroupid = $accgroupid;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrencycode(): string
    {
        return $this->currencycode;
    }

    /**
     * @param string $currencycode
     * @return static
     */
    public function withCurrencycode(string $currencycode): static
    {
        $new = clone $this;
        $new->currencycode = $currencycode;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * @param null | int $balance
     * @return static
     */
    public function withBalance(?int $balance): static
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
     * @return null | int
     */
    public function getOpenbalance(): ?int
    {
        return $this->openbalance;
    }

    /**
     * @param null | int $openbalance
     * @return static
     */
    public function withOpenbalance(?int $openbalance): static
    {
        $new = clone $this;
        $new->openbalance = $openbalance;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getArrstartdate(): ?\DateTimeInterface
    {
        return $this->arrstartdate;
    }

    /**
     * @param null | \DateTimeInterface $arrstartdate
     * @return static
     */
    public function withArrstartdate(?\DateTimeInterface $arrstartdate): static
    {
        $new = clone $this;
        $new->arrstartdate = $arrstartdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getArrenddate(): ?\DateTimeInterface
    {
        return $this->arrenddate;
    }

    /**
     * @param null | \DateTimeInterface $arrenddate
     * @return static
     */
    public function withArrenddate(?\DateTimeInterface $arrenddate): static
    {
        $new = clone $this;
        $new->arrenddate = $arrenddate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getPaystartdate(): ?\DateTimeInterface
    {
        return $this->paystartdate;
    }

    /**
     * @param null | \DateTimeInterface $paystartdate
     * @return static
     */
    public function withPaystartdate(?\DateTimeInterface $paystartdate): static
    {
        $new = clone $this;
        $new->paystartdate = $paystartdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getAccstartdate(): ?\DateTimeInterface
    {
        return $this->accstartdate;
    }

    /**
     * @param null | \DateTimeInterface $accstartdate
     * @return static
     */
    public function withAccstartdate(?\DateTimeInterface $accstartdate): static
    {
        $new = clone $this;
        $new->accstartdate = $accstartdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getAccenddate(): ?\DateTimeInterface
    {
        return $this->accenddate;
    }

    /**
     * @param null | \DateTimeInterface $accenddate
     * @return static
     */
    public function withAccenddate(?\DateTimeInterface $accenddate): static
    {
        $new = clone $this;
        $new->accenddate = $accenddate;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRegpayment(): ?int
    {
        return $this->regpayment;
    }

    /**
     * @param null | int $regpayment
     * @return static
     */
    public function withRegpayment(?int $regpayment): static
    {
        $new = clone $this;
        $new->regpayment = $regpayment;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getExpectedpayment(): ?int
    {
        return $this->expectedpayment;
    }

    /**
     * @param null | int $expectedpayment
     * @return static
     */
    public function withExpectedpayment(?int $expectedpayment): static
    {
        $new = clone $this;
        $new->expectedpayment = $expectedpayment;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getActualpayment(): ?int
    {
        return $this->actualpayment;
    }

    /**
     * @param null | int $actualpayment
     * @return static
     */
    public function withActualpayment(?int $actualpayment): static
    {
        $new = clone $this;
        $new->actualpayment = $actualpayment;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRepayperiod(): ?int
    {
        return $this->repayperiod;
    }

    /**
     * @param null | int $repayperiod
     * @return static
     */
    public function withRepayperiod(?int $repayperiod): static
    {
        $new = clone $this;
        $new->repayperiod = $repayperiod;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepayfreqcode(): string
    {
        return $this->repayfreqcode;
    }

    /**
     * @param string $repayfreqcode
     * @return static
     */
    public function withRepayfreqcode(string $repayfreqcode): static
    {
        $new = clone $this;
        $new->repayfreqcode = $repayfreqcode;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getLumppayment(): ?int
    {
        return $this->lumppayment;
    }

    /**
     * @param null | int $lumppayment
     * @return static
     */
    public function withLumppayment(?int $lumppayment): static
    {
        $new = clone $this;
        $new->lumppayment = $lumppayment;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPenintamt(): ?int
    {
        return $this->penintamt;
    }

    /**
     * @param null | int $penintamt
     * @return static
     */
    public function withPenintamt(?int $penintamt): static
    {
        $new = clone $this;
        $new->penintamt = $penintamt;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPromotionalrate(): ?int
    {
        return $this->promotionalrate;
    }

    /**
     * @param null | int $promotionalrate
     * @return static
     */
    public function withPromotionalrate(?int $promotionalrate): static
    {
        $new = clone $this;
        $new->promotionalrate = $promotionalrate;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMinimumpayment(): ?int
    {
        return $this->minimumpayment;
    }

    /**
     * @param null | int $minimumpayment
     * @return static
     */
    public function withMinimumpayment(?int $minimumpayment): static
    {
        $new = clone $this;
        $new->minimumpayment = $minimumpayment;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getStatementbalance(): ?int
    {
        return $this->statementbalance;
    }

    /**
     * @param null | int $statementbalance
     * @return static
     */
    public function withStatementbalance(?int $statementbalance): static
    {
        $new = clone $this;
        $new->statementbalance = $statementbalance;

        return $new;
    }
}

