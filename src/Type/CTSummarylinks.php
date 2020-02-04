<?php

namespace PaymentAssist\Type;

class CTSummarylinks
{

    /**
     * @var int
     */
    private $totalundecaddresses;

    /**
     * @var int
     */
    private $totalundecaddressessearched;

    /**
     * @var int
     */
    private $totalundecaddressesunsearched;

    /**
     * @var int
     */
    private $totalundecaliases;

    /**
     * @var int
     */
    private $totalundecassociates;

    /**
     * @return int
     */
    public function getTotalundecaddresses()
    {
        return $this->totalundecaddresses;
    }

    /**
     * @param int $totalundecaddresses
     * @return CTSummarylinks
     */
    public function withTotalundecaddresses($totalundecaddresses)
    {
        $new = clone $this;
        $new->totalundecaddresses = $totalundecaddresses;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalundecaddressessearched()
    {
        return $this->totalundecaddressessearched;
    }

    /**
     * @param int $totalundecaddressessearched
     * @return CTSummarylinks
     */
    public function withTotalundecaddressessearched($totalundecaddressessearched)
    {
        $new = clone $this;
        $new->totalundecaddressessearched = $totalundecaddressessearched;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalundecaddressesunsearched()
    {
        return $this->totalundecaddressesunsearched;
    }

    /**
     * @param int $totalundecaddressesunsearched
     * @return CTSummarylinks
     */
    public function withTotalundecaddressesunsearched($totalundecaddressesunsearched)
    {
        $new = clone $this;
        $new->totalundecaddressesunsearched = $totalundecaddressesunsearched;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalundecaliases()
    {
        return $this->totalundecaliases;
    }

    /**
     * @param int $totalundecaliases
     * @return CTSummarylinks
     */
    public function withTotalundecaliases($totalundecaliases)
    {
        $new = clone $this;
        $new->totalundecaliases = $totalundecaliases;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalundecassociates()
    {
        return $this->totalundecassociates;
    }

    /**
     * @param int $totalundecassociates
     * @return CTSummarylinks
     */
    public function withTotalundecassociates($totalundecassociates)
    {
        $new = clone $this;
        $new->totalundecassociates = $totalundecassociates;

        return $new;
    }


}

