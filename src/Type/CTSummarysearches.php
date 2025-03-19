<?php

namespace PaymentAssist\Type;

class CTSummarysearches
{
    /**
     * Total number of searches over last 3 months
     *
     * @var int
     */
    private int $totalsearches3months;

    /**
     * Total number of searches over last 12 months
     *
     * @var int
     */
    private int $totalsearches12months;

    /**
     * Total number of home credit searches over last 3 months
     *
     * @var int
     */
    private int $totalhomecreditsearches3months;

    /**
     * @return int
     */
    public function getTotalsearches3months() : int
    {
        return $this->totalsearches3months;
    }

    /**
     * @param int $totalsearches3months
     * @return static
     */
    public function withTotalsearches3months(int $totalsearches3months) : static
    {
        $new = clone $this;
        $new->totalsearches3months = $totalsearches3months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalsearches12months() : int
    {
        return $this->totalsearches12months;
    }

    /**
     * @param int $totalsearches12months
     * @return static
     */
    public function withTotalsearches12months(int $totalsearches12months) : static
    {
        $new = clone $this;
        $new->totalsearches12months = $totalsearches12months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalhomecreditsearches3months() : int
    {
        return $this->totalhomecreditsearches3months;
    }

    /**
     * @param int $totalhomecreditsearches3months
     * @return static
     */
    public function withTotalhomecreditsearches3months(int $totalhomecreditsearches3months) : static
    {
        $new = clone $this;
        $new->totalhomecreditsearches3months = $totalhomecreditsearches3months;

        return $new;
    }
}

