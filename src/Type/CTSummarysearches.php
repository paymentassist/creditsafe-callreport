<?php

namespace PaymentAssist\Type;

class CTSummarysearches
{

    /**
     * @var int
     */
    private $totalsearches3months;

    /**
     * @var int
     */
    private $totalsearches12months;

    /**
     * @var int
     */
    private $totalhomecreditsearches3months;

    /**
     * @return int
     */
    public function getTotalsearches3months()
    {
        return $this->totalsearches3months;
    }

    /**
     * @param int $totalsearches3months
     * @return CTSummarysearches
     */
    public function withTotalsearches3months($totalsearches3months)
    {
        $new = clone $this;
        $new->totalsearches3months = $totalsearches3months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalsearches12months()
    {
        return $this->totalsearches12months;
    }

    /**
     * @param int $totalsearches12months
     * @return CTSummarysearches
     */
    public function withTotalsearches12months($totalsearches12months)
    {
        $new = clone $this;
        $new->totalsearches12months = $totalsearches12months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalhomecreditsearches3months()
    {
        return $this->totalhomecreditsearches3months;
    }

    /**
     * @param int $totalhomecreditsearches3months
     * @return CTSummarysearches
     */
    public function withTotalhomecreditsearches3months($totalhomecreditsearches3months)
    {
        $new = clone $this;
        $new->totalhomecreditsearches3months = $totalhomecreditsearches3months;

        return $new;
    }


}

