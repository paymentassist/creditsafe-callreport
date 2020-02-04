<?php

namespace PaymentAssist\Type;

class CTAddressconfresident
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var \DateTimeInterface
     */
    private $startdate;

    /**
     * @var \DateTimeInterface
     */
    private $enddate;

    /**
     * @var int
     */
    private $ervalid;

    /**
     * @var \PaymentAssist\Type\CTOutputerhistory
     */
    private $erhistory;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @var string
     */
    private $matchtype;

    /**
     * @var int
     */
    private $currentname;

    /**
     * @var int
     */
    private $declaredalias;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CTAddressconfresident
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
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     * @return CTAddressconfresident
     */
    public function withDuration($duration)
    {
        $new = clone $this;
        $new->duration = $duration;

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
     * @return CTAddressconfresident
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
     * @return CTAddressconfresident
     */
    public function withEnddate($enddate)
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }

    /**
     * @return int
     */
    public function getErvalid()
    {
        return $this->ervalid;
    }

    /**
     * @param int $ervalid
     * @return CTAddressconfresident
     */
    public function withErvalid($ervalid)
    {
        $new = clone $this;
        $new->ervalid = $ervalid;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputerhistory
     */
    public function getErhistory()
    {
        return $this->erhistory;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputerhistory $erhistory
     * @return CTAddressconfresident
     */
    public function withErhistory($erhistory)
    {
        $new = clone $this;
        $new->erhistory = $erhistory;

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
     * @return CTAddressconfresident
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatchtype()
    {
        return $this->matchtype;
    }

    /**
     * @param string $matchtype
     * @return CTAddressconfresident
     */
    public function withMatchtype($matchtype)
    {
        $new = clone $this;
        $new->matchtype = $matchtype;

        return $new;
    }

    /**
     * @return int
     */
    public function getCurrentname()
    {
        return $this->currentname;
    }

    /**
     * @param int $currentname
     * @return CTAddressconfresident
     */
    public function withCurrentname($currentname)
    {
        $new = clone $this;
        $new->currentname = $currentname;

        return $new;
    }

    /**
     * @return int
     */
    public function getDeclaredalias()
    {
        return $this->declaredalias;
    }

    /**
     * @param int $declaredalias
     * @return CTAddressconfresident
     */
    public function withDeclaredalias($declaredalias)
    {
        $new = clone $this;
        $new->declaredalias = $declaredalias;

        return $new;
    }


}

