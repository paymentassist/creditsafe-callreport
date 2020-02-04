<?php

namespace PaymentAssist\Type;

class CTOutputerhistory
{

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
    private $optout;

    /**
     * @var int
     */
    private $rollingroll;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @return \DateTimeInterface
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param \DateTimeInterface $startdate
     * @return CTOutputerhistory
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
     * @return CTOutputerhistory
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
    public function getOptout()
    {
        return $this->optout;
    }

    /**
     * @param int $optout
     * @return CTOutputerhistory
     */
    public function withOptout($optout)
    {
        $new = clone $this;
        $new->optout = $optout;

        return $new;
    }

    /**
     * @return int
     */
    public function getRollingroll()
    {
        return $this->rollingroll;
    }

    /**
     * @param int $rollingroll
     * @return CTOutputerhistory
     */
    public function withRollingroll($rollingroll)
    {
        $new = clone $this;
        $new->rollingroll = $rollingroll;

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
     * @return CTOutputerhistory
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }


}

