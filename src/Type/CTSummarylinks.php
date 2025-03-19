<?php

namespace PaymentAssist\Type;

class CTSummarylinks
{
    /**
     * When auto-search Address Links is disabled this represents the total number of undeclared Address Links. This is not output when auto-search Address Links is enabled
     *
     * @var null | int
     */
    private ?int $totalundecaddresses = null;

    /**
     * When auto-search Address Links is enabled this represents the total number of undeclared searched Address Links. This is not output when auto-search Address Links is disabled
     *
     * @var null | int
     */
    private ?int $totalundecaddressessearched = null;

    /**
     * When auto-search Address Links is enabled this represents the total number of undeclared unsearched Address Links. This is not output when auto-search Address Links is disabled
     *
     * @var null | int
     */
    private ?int $totalundecaddressesunsearched = null;

    /**
     * Total number of undeclared alias links
     *
     * @var int
     */
    private int $totalundecaliases;

    /**
     * When opted-in to view financial associates this represents the total number of undeclared associate links identified
     *
     * @var null | int
     */
    private ?int $totalundecassociates = null;

    /**
     * @return null | int
     */
    public function getTotalundecaddresses() : ?int
    {
        return $this->totalundecaddresses;
    }

    /**
     * @param null | int $totalundecaddresses
     * @return static
     */
    public function withTotalundecaddresses(?int $totalundecaddresses) : static
    {
        $new = clone $this;
        $new->totalundecaddresses = $totalundecaddresses;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalundecaddressessearched() : ?int
    {
        return $this->totalundecaddressessearched;
    }

    /**
     * @param null | int $totalundecaddressessearched
     * @return static
     */
    public function withTotalundecaddressessearched(?int $totalundecaddressessearched) : static
    {
        $new = clone $this;
        $new->totalundecaddressessearched = $totalundecaddressessearched;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalundecaddressesunsearched() : ?int
    {
        return $this->totalundecaddressesunsearched;
    }

    /**
     * @param null | int $totalundecaddressesunsearched
     * @return static
     */
    public function withTotalundecaddressesunsearched(?int $totalundecaddressesunsearched) : static
    {
        $new = clone $this;
        $new->totalundecaddressesunsearched = $totalundecaddressesunsearched;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalundecaliases() : int
    {
        return $this->totalundecaliases;
    }

    /**
     * @param int $totalundecaliases
     * @return static
     */
    public function withTotalundecaliases(int $totalundecaliases) : static
    {
        $new = clone $this;
        $new->totalundecaliases = $totalundecaliases;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotalundecassociates() : ?int
    {
        return $this->totalundecassociates;
    }

    /**
     * @param null | int $totalundecassociates
     * @return static
     */
    public function withTotalundecassociates(?int $totalundecassociates) : static
    {
        $new = clone $this;
        $new->totalundecassociates = $totalundecassociates;

        return $new;
    }
}

