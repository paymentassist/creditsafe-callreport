<?php

namespace PaymentAssist\Type;

class CTSummarybds
{

    /**
     * @var int
     */
    private $totalminpayments12months;

    /**
     * @var int
     */
    private $totalminpayments36months;

    /**
     * @var int
     */
    private $totalvaluecashadvances12months;

    /**
     * @var int
     */
    private $totalvaluecashadvances36months;

    /**
     * @return int
     */
    public function getTotalminpayments12months()
    {
        return $this->totalminpayments12months;
    }

    /**
     * @param int $totalminpayments12months
     * @return CTSummarybds
     */
    public function withTotalminpayments12months($totalminpayments12months)
    {
        $new = clone $this;
        $new->totalminpayments12months = $totalminpayments12months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalminpayments36months()
    {
        return $this->totalminpayments36months;
    }

    /**
     * @param int $totalminpayments36months
     * @return CTSummarybds
     */
    public function withTotalminpayments36months($totalminpayments36months)
    {
        $new = clone $this;
        $new->totalminpayments36months = $totalminpayments36months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalvaluecashadvances12months()
    {
        return $this->totalvaluecashadvances12months;
    }

    /**
     * @param int $totalvaluecashadvances12months
     * @return CTSummarybds
     */
    public function withTotalvaluecashadvances12months($totalvaluecashadvances12months)
    {
        $new = clone $this;
        $new->totalvaluecashadvances12months = $totalvaluecashadvances12months;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalvaluecashadvances36months()
    {
        return $this->totalvaluecashadvances36months;
    }

    /**
     * @param int $totalvaluecashadvances36months
     * @return CTSummarybds
     */
    public function withTotalvaluecashadvances36months($totalvaluecashadvances36months)
    {
        $new = clone $this;
        $new->totalvaluecashadvances36months = $totalvaluecashadvances36months;

        return $new;
    }


}

