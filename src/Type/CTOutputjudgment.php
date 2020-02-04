<?php

namespace PaymentAssist\Type;

class CTOutputjudgment
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private $address;

    /**
     * @var \DateTimeInterface
     */
    private $dob;

    /**
     * @var string
     */
    private $courtname;

    /**
     * @var int
     */
    private $courttype;

    /**
     * @var string
     */
    private $casenumber;

    /**
     * @var string
     */
    private $status;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var \DateTimeInterface
     */
    private $judgmentdate;

    /**
     * @var \DateTimeInterface
     */
    private $datesatisfied;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CTOutputjudgment
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

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
     * @return CTOutputjudgment
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
     * @return CTOutputjudgment
     */
    public function withDob($dob)
    {
        $new = clone $this;
        $new->dob = $dob;

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
     * @return CTOutputjudgment
     */
    public function withCourtname($courtname)
    {
        $new = clone $this;
        $new->courtname = $courtname;

        return $new;
    }

    /**
     * @return int
     */
    public function getCourttype()
    {
        return $this->courttype;
    }

    /**
     * @param int $courttype
     * @return CTOutputjudgment
     */
    public function withCourttype($courttype)
    {
        $new = clone $this;
        $new->courttype = $courttype;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasenumber()
    {
        return $this->casenumber;
    }

    /**
     * @param string $casenumber
     * @return CTOutputjudgment
     */
    public function withCasenumber($casenumber)
    {
        $new = clone $this;
        $new->casenumber = $casenumber;

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
     * @return CTOutputjudgment
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

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
     * @return CTOutputjudgment
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getJudgmentdate()
    {
        return $this->judgmentdate;
    }

    /**
     * @param \DateTimeInterface $judgmentdate
     * @return CTOutputjudgment
     */
    public function withJudgmentdate($judgmentdate)
    {
        $new = clone $this;
        $new->judgmentdate = $judgmentdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatesatisfied()
    {
        return $this->datesatisfied;
    }

    /**
     * @param \DateTimeInterface $datesatisfied
     * @return CTOutputjudgment
     */
    public function withDatesatisfied($datesatisfied)
    {
        $new = clone $this;
        $new->datesatisfied = $datesatisfied;

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
     * @return CTOutputjudgment
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }


}

