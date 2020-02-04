<?php

namespace PaymentAssist\Type;

class CTSummaryjudgment
{

    /**
     * @var int
     */
    private $total36m;

    /**
     * @var int
     */
    private $total;

    /**
     * @var int
     */
    private $totalactive;

    /**
     * @var int
     */
    private $totalsatisfied;

    /**
     * @var int
     */
    private $totalactiveamount;

    /**
     * @var int
     */
    private $totalsatisfiedamount;

    /**
     * @return int
     */
    public function getTotal36m()
    {
        return $this->total36m;
    }

    /**
     * @param int $total36m
     * @return CTSummaryjudgment
     */
    public function withTotal36m($total36m)
    {
        $new = clone $this;
        $new->total36m = $total36m;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return CTSummaryjudgment
     */
    public function withTotal($total)
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalactive()
    {
        return $this->totalactive;
    }

    /**
     * @param int $totalactive
     * @return CTSummaryjudgment
     */
    public function withTotalactive($totalactive)
    {
        $new = clone $this;
        $new->totalactive = $totalactive;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalsatisfied()
    {
        return $this->totalsatisfied;
    }

    /**
     * @param int $totalsatisfied
     * @return CTSummaryjudgment
     */
    public function withTotalsatisfied($totalsatisfied)
    {
        $new = clone $this;
        $new->totalsatisfied = $totalsatisfied;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalactiveamount()
    {
        return $this->totalactiveamount;
    }

    /**
     * @param int $totalactiveamount
     * @return CTSummaryjudgment
     */
    public function withTotalactiveamount($totalactiveamount)
    {
        $new = clone $this;
        $new->totalactiveamount = $totalactiveamount;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalsatisfiedamount()
    {
        return $this->totalsatisfiedamount;
    }

    /**
     * @param int $totalsatisfiedamount
     * @return CTSummaryjudgment
     */
    public function withTotalsatisfiedamount($totalsatisfiedamount)
    {
        $new = clone $this;
        $new->totalsatisfiedamount = $totalsatisfiedamount;

        return $new;
    }


}

