<?php

namespace PaymentAssist\Type;

class CTSummaryjudgment
{
    /**
     * Total number of Judgments in last 3 years
     *
     * @var null | int
     */
    private ?int $total36m = null;

    /**
     * Total number of Judgments
     *
     * @var null | int
     */
    private ?int $total = null;

    /**
     * Total number of active Judgments
     *
     * @var null | int
     */
    private ?int $totalactive = null;

    /**
     * Total number of satisfied Judgments
     *
     * @var null | int
     */
    private ?int $totalsatisfied = null;

    /**
     * Total amount of active Judgments
     *
     * @var null | int
     */
    private ?int $totalactiveamount = null;

    /**
     * Total amount of satisfied Judgments
     *
     * @var null | int
     */
    private ?int $totalsatisfiedamount = null;

    /**
     * @return null | int
     */
    public function getTotal36m() : ?int
    {
        return $this->total36m;
    }

    /**
     * @param null | int $total36m
     * @return static
     */
    public function withTotal36m(?int $total36m) : static
    {
        $new = clone $this;
        $new->total36m = $total36m;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }

    /**
     * @param null | int $total
     * @return static
     */
    public function withTotal(?int $total) : static
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalactive() : ?int
    {
        return $this->totalactive;
    }

    /**
     * @param null | int $totalactive
     * @return static
     */
    public function withTotalactive(?int $totalactive) : static
    {
        $new = clone $this;
        $new->totalactive = $totalactive;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalsatisfied() : ?int
    {
        return $this->totalsatisfied;
    }

    /**
     * @param null | int $totalsatisfied
     * @return static
     */
    public function withTotalsatisfied(?int $totalsatisfied) : static
    {
        $new = clone $this;
        $new->totalsatisfied = $totalsatisfied;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalactiveamount() : ?int
    {
        return $this->totalactiveamount;
    }

    /**
     * @param null | int $totalactiveamount
     * @return static
     */
    public function withTotalactiveamount(?int $totalactiveamount) : static
    {
        $new = clone $this;
        $new->totalactiveamount = $totalactiveamount;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalsatisfiedamount() : ?int
    {
        return $this->totalsatisfiedamount;
    }

    /**
     * @param null | int $totalsatisfiedamount
     * @return static
     */
    public function withTotalsatisfiedamount(?int $totalsatisfiedamount) : static
    {
        $new = clone $this;
        $new->totalsatisfiedamount = $totalsatisfiedamount;

        return $new;
    }
}

