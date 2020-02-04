<?php

namespace PaymentAssist\Type;

class Accdetails
{

    /**
     * @var string
     */
    private $accno;

    /**
     * @var int
     */
    private $accsuffix;

    /**
     * @var int
     */
    private $joint;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTimeInterface
     */
    private $dateupdated;

    /**
     * @var string
     */
    private $acctypecode;

    /**
     * @var int
     */
    private $accgroupid;

    /**
     * @var string
     */
    private $currencycode;

    /**
     * @var int
     */
    private $balance;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $openbalance;

    /**
     * @var \DateTimeInterface
     */
    private $arrstartdate;

    /**
     * @var \DateTimeInterface
     */
    private $arrenddate;

    /**
     * @var \DateTimeInterface
     */
    private $paystartdate;

    /**
     * @var \DateTimeInterface
     */
    private $accstartdate;

    /**
     * @var \DateTimeInterface
     */
    private $accenddate;

    /**
     * @var int
     */
    private $regpayment;

    /**
     * @var int
     */
    private $expectedpayment;

    /**
     * @var int
     */
    private $actualpayment;

    /**
     * @var int
     */
    private $repayperiod;

    /**
     * @var string
     */
    private $repayfreqcode;

    /**
     * @var int
     */
    private $lumppayment;

    /**
     * @var int
     */
    private $penintamt;

    /**
     * @var int
     */
    private $promotionalrate;

    /**
     * @var int
     */
    private $minimumpayment;

    /**
     * @var int
     */
    private $statementbalance;

    /**
     * @return string
     */
    public function getAccno()
    {
        return $this->accno;
    }

    /**
     * @param string $accno
     * @return Accdetails
     */
    public function withAccno($accno)
    {
        $new = clone $this;
        $new->accno = $accno;

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
     * @return Accdetails
     */
    public function withAccsuffix($accsuffix)
    {
        $new = clone $this;
        $new->accsuffix = $accsuffix;

        return $new;
    }

    /**
     * @return int
     */
    public function getJoint()
    {
        return $this->joint;
    }

    /**
     * @param int $joint
     * @return Accdetails
     */
    public function withJoint($joint)
    {
        $new = clone $this;
        $new->joint = $joint;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Accdetails
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateupdated()
    {
        return $this->dateupdated;
    }

    /**
     * @param \DateTimeInterface $dateupdated
     * @return Accdetails
     */
    public function withDateupdated($dateupdated)
    {
        $new = clone $this;
        $new->dateupdated = $dateupdated;

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
     * @return Accdetails
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
    public function getAccgroupid()
    {
        return $this->accgroupid;
    }

    /**
     * @param int $accgroupid
     * @return Accdetails
     */
    public function withAccgroupid($accgroupid)
    {
        $new = clone $this;
        $new->accgroupid = $accgroupid;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrencycode()
    {
        return $this->currencycode;
    }

    /**
     * @param string $currencycode
     * @return Accdetails
     */
    public function withCurrencycode($currencycode)
    {
        $new = clone $this;
        $new->currencycode = $currencycode;

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
     * @return Accdetails
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
     * @return Accdetails
     */
    public function withLimit($limit)
    {
        $new = clone $this;
        $new->limit = $limit;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpenbalance()
    {
        return $this->openbalance;
    }

    /**
     * @param int $openbalance
     * @return Accdetails
     */
    public function withOpenbalance($openbalance)
    {
        $new = clone $this;
        $new->openbalance = $openbalance;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getArrstartdate()
    {
        return $this->arrstartdate;
    }

    /**
     * @param \DateTimeInterface $arrstartdate
     * @return Accdetails
     */
    public function withArrstartdate($arrstartdate)
    {
        $new = clone $this;
        $new->arrstartdate = $arrstartdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getArrenddate()
    {
        return $this->arrenddate;
    }

    /**
     * @param \DateTimeInterface $arrenddate
     * @return Accdetails
     */
    public function withArrenddate($arrenddate)
    {
        $new = clone $this;
        $new->arrenddate = $arrenddate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPaystartdate()
    {
        return $this->paystartdate;
    }

    /**
     * @param \DateTimeInterface $paystartdate
     * @return Accdetails
     */
    public function withPaystartdate($paystartdate)
    {
        $new = clone $this;
        $new->paystartdate = $paystartdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAccstartdate()
    {
        return $this->accstartdate;
    }

    /**
     * @param \DateTimeInterface $accstartdate
     * @return Accdetails
     */
    public function withAccstartdate($accstartdate)
    {
        $new = clone $this;
        $new->accstartdate = $accstartdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAccenddate()
    {
        return $this->accenddate;
    }

    /**
     * @param \DateTimeInterface $accenddate
     * @return Accdetails
     */
    public function withAccenddate($accenddate)
    {
        $new = clone $this;
        $new->accenddate = $accenddate;

        return $new;
    }

    /**
     * @return int
     */
    public function getRegpayment()
    {
        return $this->regpayment;
    }

    /**
     * @param int $regpayment
     * @return Accdetails
     */
    public function withRegpayment($regpayment)
    {
        $new = clone $this;
        $new->regpayment = $regpayment;

        return $new;
    }

    /**
     * @return int
     */
    public function getExpectedpayment()
    {
        return $this->expectedpayment;
    }

    /**
     * @param int $expectedpayment
     * @return Accdetails
     */
    public function withExpectedpayment($expectedpayment)
    {
        $new = clone $this;
        $new->expectedpayment = $expectedpayment;

        return $new;
    }

    /**
     * @return int
     */
    public function getActualpayment()
    {
        return $this->actualpayment;
    }

    /**
     * @param int $actualpayment
     * @return Accdetails
     */
    public function withActualpayment($actualpayment)
    {
        $new = clone $this;
        $new->actualpayment = $actualpayment;

        return $new;
    }

    /**
     * @return int
     */
    public function getRepayperiod()
    {
        return $this->repayperiod;
    }

    /**
     * @param int $repayperiod
     * @return Accdetails
     */
    public function withRepayperiod($repayperiod)
    {
        $new = clone $this;
        $new->repayperiod = $repayperiod;

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
     * @return Accdetails
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
    public function getLumppayment()
    {
        return $this->lumppayment;
    }

    /**
     * @param int $lumppayment
     * @return Accdetails
     */
    public function withLumppayment($lumppayment)
    {
        $new = clone $this;
        $new->lumppayment = $lumppayment;

        return $new;
    }

    /**
     * @return int
     */
    public function getPenintamt()
    {
        return $this->penintamt;
    }

    /**
     * @param int $penintamt
     * @return Accdetails
     */
    public function withPenintamt($penintamt)
    {
        $new = clone $this;
        $new->penintamt = $penintamt;

        return $new;
    }

    /**
     * @return int
     */
    public function getPromotionalrate()
    {
        return $this->promotionalrate;
    }

    /**
     * @param int $promotionalrate
     * @return Accdetails
     */
    public function withPromotionalrate($promotionalrate)
    {
        $new = clone $this;
        $new->promotionalrate = $promotionalrate;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinimumpayment()
    {
        return $this->minimumpayment;
    }

    /**
     * @param int $minimumpayment
     * @return Accdetails
     */
    public function withMinimumpayment($minimumpayment)
    {
        $new = clone $this;
        $new->minimumpayment = $minimumpayment;

        return $new;
    }

    /**
     * @return int
     */
    public function getStatementbalance()
    {
        return $this->statementbalance;
    }

    /**
     * @param int $statementbalance
     * @return Accdetails
     */
    public function withStatementbalance($statementbalance)
    {
        $new = clone $this;
        $new->statementbalance = $statementbalance;

        return $new;
    }


}

