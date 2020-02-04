<?php

namespace PaymentAssist\Type;

class CTOutputrtraccount
{

    /**
     * @var \PaymentAssist\Type\Holder
     */
    private $holder;

    /**
     * @var string
     */
    private $orgtypecode;

    /**
     * @var string
     */
    private $orgname;

    /**
     * @var string
     */
    private $accnum;

    /**
     * @var int
     */
    private $accsuffix;

    /**
     * @var string
     */
    private $acctypecode;

    /**
     * @var int
     */
    private $balance;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var \DateTimeInterface
     */
    private $startdate;

    /**
     * @var \DateTimeInterface
     */
    private $enddate;

    /**
     * @var string
     */
    private $accstatuscode;

    /**
     * @var string
     */
    private $repayfreqcode;

    /**
     * @var int
     */
    private $numoverdue;

    /**
     * @var int
     */
    private $rollover;

    /**
     * @var int
     */
    private $creditext;

    /**
     * @var int
     */
    private $changepay;

    /**
     * @var int
     */
    private $nextpayamount;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @var \DateTimeInterface
     */
    private $updated;

    /**
     * @return \PaymentAssist\Type\Holder
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * @param \PaymentAssist\Type\Holder $holder
     * @return CTOutputrtraccount
     */
    public function withHolder($holder)
    {
        $new = clone $this;
        $new->holder = $holder;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrgtypecode()
    {
        return $this->orgtypecode;
    }

    /**
     * @param string $orgtypecode
     * @return CTOutputrtraccount
     */
    public function withOrgtypecode($orgtypecode)
    {
        $new = clone $this;
        $new->orgtypecode = $orgtypecode;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrgname()
    {
        return $this->orgname;
    }

    /**
     * @param string $orgname
     * @return CTOutputrtraccount
     */
    public function withOrgname($orgname)
    {
        $new = clone $this;
        $new->orgname = $orgname;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccnum()
    {
        return $this->accnum;
    }

    /**
     * @param string $accnum
     * @return CTOutputrtraccount
     */
    public function withAccnum($accnum)
    {
        $new = clone $this;
        $new->accnum = $accnum;

        return $new;
    }

    /**
     * @return int
     */
    public function getAccsuffix()
    {
        return $this->accsuffix;
    }

    /**
     * @param int $accsuffix
     * @return CTOutputrtraccount
     */
    public function withAccsuffix($accsuffix)
    {
        $new = clone $this;
        $new->accsuffix = $accsuffix;

        return $new;
    }

    /**
     * @return string
     */
    public function getAcctypecode()
    {
        return $this->acctypecode;
    }

    /**
     * @param string $acctypecode
     * @return CTOutputrtraccount
     */
    public function withAcctypecode($acctypecode)
    {
        $new = clone $this;
        $new->acctypecode = $acctypecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     * @return CTOutputrtraccount
     */
    public function withBalance($balance)
    {
        $new = clone $this;
        $new->balance = $balance;

        return $new;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return CTOutputrtraccount
     */
    public function withLimit($limit)
    {
        $new = clone $this;
        $new->limit = $limit;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param \DateTimeInterface $startdate
     * @return CTOutputrtraccount
     */
    public function withStartdate($startdate)
    {
        $new = clone $this;
        $new->startdate = $startdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param \DateTimeInterface $enddate
     * @return CTOutputrtraccount
     */
    public function withEnddate($enddate)
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccstatuscode()
    {
        return $this->accstatuscode;
    }

    /**
     * @param string $accstatuscode
     * @return CTOutputrtraccount
     */
    public function withAccstatuscode($accstatuscode)
    {
        $new = clone $this;
        $new->accstatuscode = $accstatuscode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepayfreqcode()
    {
        return $this->repayfreqcode;
    }

    /**
     * @param string $repayfreqcode
     * @return CTOutputrtraccount
     */
    public function withRepayfreqcode($repayfreqcode)
    {
        $new = clone $this;
        $new->repayfreqcode = $repayfreqcode;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumoverdue()
    {
        return $this->numoverdue;
    }

    /**
     * @param int $numoverdue
     * @return CTOutputrtraccount
     */
    public function withNumoverdue($numoverdue)
    {
        $new = clone $this;
        $new->numoverdue = $numoverdue;

        return $new;
    }

    /**
     * @return int
     */
    public function getRollover()
    {
        return $this->rollover;
    }

    /**
     * @param int $rollover
     * @return CTOutputrtraccount
     */
    public function withRollover($rollover)
    {
        $new = clone $this;
        $new->rollover = $rollover;

        return $new;
    }

    /**
     * @return int
     */
    public function getCreditext()
    {
        return $this->creditext;
    }

    /**
     * @param int $creditext
     * @return CTOutputrtraccount
     */
    public function withCreditext($creditext)
    {
        $new = clone $this;
        $new->creditext = $creditext;

        return $new;
    }

    /**
     * @return int
     */
    public function getChangepay()
    {
        return $this->changepay;
    }

    /**
     * @param int $changepay
     * @return CTOutputrtraccount
     */
    public function withChangepay($changepay)
    {
        $new = clone $this;
        $new->changepay = $changepay;

        return $new;
    }

    /**
     * @return int
     */
    public function getNextpayamount()
    {
        return $this->nextpayamount;
    }

    /**
     * @param int $nextpayamount
     * @return CTOutputrtraccount
     */
    public function withNextpayamount($nextpayamount)
    {
        $new = clone $this;
        $new->nextpayamount = $nextpayamount;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputnotice
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputnotice $notice
     * @return CTOutputrtraccount
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTimeInterface $updated
     * @return CTOutputrtraccount
     */
    public function withUpdated($updated)
    {
        $new = clone $this;
        $new->updated = $updated;

        return $new;
    }


}

