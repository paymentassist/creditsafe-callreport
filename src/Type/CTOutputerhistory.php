<?php

namespace PaymentAssist\Type;

class CTOutputerhistory
{
    /**
     * Start date for this Electoral Roll history period
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $startdate;

    /**
     * End date for this Electoral Roll history period
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $enddate = null;

    /**
     * A value of 1 indicates that this Electoral Roll history is opted out
     *
     * @var int
     */
    private int $optout;

    /**
     * A value of 1 indicates that this Electoral Roll history is based on the Rolling Electoral Roll
     *
     * @var int
     */
    private int $rollingroll;

    /**
     * Set of dispute and correction notices against a period of Electoral Roll history
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * @return \DateTimeInterface
     */
    public function getStartdate(): \DateTimeInterface
    {
        return $this->startdate;
    }

    /**
     * @param \DateTimeInterface $startdate
     * @return static
     */
    public function withStartdate(\DateTimeInterface $startdate): static
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
     * @return int
     */
    public function getOptout(): int
    {
        return $this->optout;
    }

    /**
     * @param int $optout
     * @return static
     */
    public function withOptout(int $optout): static
    {
        $new = clone $this;
        $new->optout = $optout;

        return $new;
    }

    /**
     * @return int
     */
    public function getRollingroll(): int
    {
        return $this->rollingroll;
    }

    /**
     * @param int $rollingroll
     * @return static
     */
    public function withRollingroll(int $rollingroll): static
    {
        $new = clone $this;
        $new->rollingroll = $rollingroll;

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
}

