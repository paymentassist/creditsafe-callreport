<?php

namespace PaymentAssist\Type;

class CTOutputinsolvency
{

    /**
     * @var \DateTimeInterface
     */
    private $dischargedate;

    /**
     * @var string
     */
    private $lineofbusiness;

    /**
     * @var string
     */
    private $courtname;

    /**
     * @var string
     */
    private $currentstatus;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $ordertype;

    /**
     * @var \DateTimeInterface
     */
    private $orderdate;

    /**
     * @var int
     */
    private $caseyear;

    /**
     * @var string
     */
    private $caseref;

    /**
     * @var \PaymentAssist\Type\Restriction
     */
    private $restriction;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $tradingname;

    /**
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private $address;

    /**
     * @var \DateTimeInterface
     */
    private $dob;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @return \DateTimeInterface
     */
    public function getDischargedate()
    {
        return $this->dischargedate;
    }

    /**
     * @param \DateTimeInterface $dischargedate
     * @return CTOutputinsolvency
     */
    public function withDischargedate($dischargedate)
    {
        $new = clone $this;
        $new->dischargedate = $dischargedate;

        return $new;
    }

    /**
     * @return string
     */
    public function getLineofbusiness()
    {
        return $this->lineofbusiness;
    }

    /**
     * @param string $lineofbusiness
     * @return CTOutputinsolvency
     */
    public function withLineofbusiness($lineofbusiness)
    {
        $new = clone $this;
        $new->lineofbusiness = $lineofbusiness;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourtname()
    {
        return $this->courtname;
    }

    /**
     * @param string $courtname
     * @return CTOutputinsolvency
     */
    public function withCourtname($courtname)
    {
        $new = clone $this;
        $new->courtname = $courtname;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrentstatus()
    {
        return $this->currentstatus;
    }

    /**
     * @param string $currentstatus
     * @return CTOutputinsolvency
     */
    public function withCurrentstatus($currentstatus)
    {
        $new = clone $this;
        $new->currentstatus = $currentstatus;

        return $new;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return CTOutputinsolvency
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrdertype()
    {
        return $this->ordertype;
    }

    /**
     * @param string $ordertype
     * @return CTOutputinsolvency
     */
    public function withOrdertype($ordertype)
    {
        $new = clone $this;
        $new->ordertype = $ordertype;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * @param \DateTimeInterface $orderdate
     * @return CTOutputinsolvency
     */
    public function withOrderdate($orderdate)
    {
        $new = clone $this;
        $new->orderdate = $orderdate;

        return $new;
    }

    /**
     * @return int
     */
    public function getCaseyear()
    {
        return $this->caseyear;
    }

    /**
     * @param int $caseyear
     * @return CTOutputinsolvency
     */
    public function withCaseyear($caseyear)
    {
        $new = clone $this;
        $new->caseyear = $caseyear;

        return $new;
    }

    /**
     * @return string
     */
    public function getCaseref()
    {
        return $this->caseref;
    }

    /**
     * @param string $caseref
     * @return CTOutputinsolvency
     */
    public function withCaseref($caseref)
    {
        $new = clone $this;
        $new->caseref = $caseref;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Restriction
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * @param \PaymentAssist\Type\Restriction $restriction
     * @return CTOutputinsolvency
     */
    public function withRestriction($restriction)
    {
        $new = clone $this;
        $new->restriction = $restriction;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CTOutputinsolvency
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getTradingname()
    {
        return $this->tradingname;
    }

    /**
     * @param string $tradingname
     * @return CTOutputinsolvency
     */
    public function withTradingname($tradingname)
    {
        $new = clone $this;
        $new->tradingname = $tradingname;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddress $address
     * @return CTOutputinsolvency
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param \DateTimeInterface $dob
     * @return CTOutputinsolvency
     */
    public function withDob($dob)
    {
        $new = clone $this;
        $new->dob = $dob;

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
     * @return CTOutputinsolvency
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }


}

