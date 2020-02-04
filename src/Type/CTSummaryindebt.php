<?php

namespace PaymentAssist\Type;

class CTSummaryindebt
{

    /**
     * @var int
     */
    private $totalbalancesactive;

    /**
     * @var int
     */
    private $totalbalancesrevolve;

    /**
     * @var int
     */
    private $balancelimitratiorevolve;

    /**
     * @var int
     */
    private $totallimitsrevolve;

    /**
     * @var int
     */
    private $totalbalancesloans;

    /**
     * @var int
     */
    private $totalbalancesmortgages;

    /**
     * @return int
     */
    public function getTotalbalancesactive()
    {
        return $this->totalbalancesactive;
    }

    /**
     * @param int $totalbalancesactive
     * @return CTSummaryindebt
     */
    public function withTotalbalancesactive($totalbalancesactive)
    {
        $new = clone $this;
        $new->totalbalancesactive = $totalbalancesactive;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalbalancesrevolve()
    {
        return $this->totalbalancesrevolve;
    }

    /**
     * @param int $totalbalancesrevolve
     * @return CTSummaryindebt
     */
    public function withTotalbalancesrevolve($totalbalancesrevolve)
    {
        $new = clone $this;
        $new->totalbalancesrevolve = $totalbalancesrevolve;

        return $new;
    }

    /**
     * @return int
     */
    public function getBalancelimitratiorevolve()
    {
        return $this->balancelimitratiorevolve;
    }

    /**
     * @param int $balancelimitratiorevolve
     * @return CTSummaryindebt
     */
    public function withBalancelimitratiorevolve($balancelimitratiorevolve)
    {
        $new = clone $this;
        $new->balancelimitratiorevolve = $balancelimitratiorevolve;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotallimitsrevolve()
    {
        return $this->totallimitsrevolve;
    }

    /**
     * @param int $totallimitsrevolve
     * @return CTSummaryindebt
     */
    public function withTotallimitsrevolve($totallimitsrevolve)
    {
        $new = clone $this;
        $new->totallimitsrevolve = $totallimitsrevolve;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalbalancesloans()
    {
        return $this->totalbalancesloans;
    }

    /**
     * @param int $totalbalancesloans
     * @return CTSummaryindebt
     */
    public function withTotalbalancesloans($totalbalancesloans)
    {
        $new = clone $this;
        $new->totalbalancesloans = $totalbalancesloans;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalbalancesmortgages()
    {
        return $this->totalbalancesmortgages;
    }

    /**
     * @param int $totalbalancesmortgages
     * @return CTSummaryindebt
     */
    public function withTotalbalancesmortgages($totalbalancesmortgages)
    {
        $new = clone $this;
        $new->totalbalancesmortgages = $totalbalancesmortgages;

        return $new;
    }


}

