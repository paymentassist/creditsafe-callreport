<?php

namespace PaymentAssist\Type;

class CTOutputshareaccount
{
    /**
     * Supplier related details
     *
     * @var \PaymentAssist\Type\Supplierdetails
     */
    private \PaymentAssist\Type\Supplierdetails $supplierdetails;

    /**
     * Account holder related details
     *
     * @var \PaymentAssist\Type\Accholderdetails
     */
    private \PaymentAssist\Type\Accholderdetails $accholderdetails;

    /**
     * Default related details
     *
     * @var null | \PaymentAssist\Type\DefaultType
     */
    private ?\PaymentAssist\Type\DefaultType $default = null;

    /**
     * Delinquency related details
     *
     * @var null | \PaymentAssist\Type\Delinquent
     */
    private ?\PaymentAssist\Type\Delinquent $delinquent = null;

    /**
     * Account history
     *
     * @var \PaymentAssist\Type\Acchistory
     */
    private \PaymentAssist\Type\Acchistory $acchistory;

    /**
     * General account details
     *
     * @var \PaymentAssist\Type\Accdetails
     */
    private \PaymentAssist\Type\Accdetails $accdetails;

    /**
     * Set of Dispute and Correction Notices against an Account
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * @return \PaymentAssist\Type\Supplierdetails
     */
    public function getSupplierdetails() : \PaymentAssist\Type\Supplierdetails
    {
        return $this->supplierdetails;
    }

    /**
     * @param \PaymentAssist\Type\Supplierdetails $supplierdetails
     * @return static
     */
    public function withSupplierdetails(\PaymentAssist\Type\Supplierdetails $supplierdetails) : static
    {
        $new = clone $this;
        $new->supplierdetails = $supplierdetails;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Accholderdetails
     */
    public function getAccholderdetails() : \PaymentAssist\Type\Accholderdetails
    {
        return $this->accholderdetails;
    }

    /**
     * @param \PaymentAssist\Type\Accholderdetails $accholderdetails
     * @return static
     */
    public function withAccholderdetails(\PaymentAssist\Type\Accholderdetails $accholderdetails) : static
    {
        $new = clone $this;
        $new->accholderdetails = $accholderdetails;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\DefaultType
     */
    public function getDefault() : ?\PaymentAssist\Type\DefaultType
    {
        return $this->default;
    }

    /**
     * @param null | \PaymentAssist\Type\DefaultType $default
     * @return static
     */
    public function withDefault(?\PaymentAssist\Type\DefaultType $default) : static
    {
        $new = clone $this;
        $new->default = $default;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Delinquent
     */
    public function getDelinquent() : ?\PaymentAssist\Type\Delinquent
    {
        return $this->delinquent;
    }

    /**
     * @param null | \PaymentAssist\Type\Delinquent $delinquent
     * @return static
     */
    public function withDelinquent(?\PaymentAssist\Type\Delinquent $delinquent) : static
    {
        $new = clone $this;
        $new->delinquent = $delinquent;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Acchistory
     */
    public function getAcchistory() : \PaymentAssist\Type\Acchistory
    {
        return $this->acchistory;
    }

    /**
     * @param \PaymentAssist\Type\Acchistory $acchistory
     * @return static
     */
    public function withAcchistory(\PaymentAssist\Type\Acchistory $acchistory) : static
    {
        $new = clone $this;
        $new->acchistory = $acchistory;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Accdetails
     */
    public function getAccdetails() : \PaymentAssist\Type\Accdetails
    {
        return $this->accdetails;
    }

    /**
     * @param \PaymentAssist\Type\Accdetails $accdetails
     * @return static
     */
    public function withAccdetails(\PaymentAssist\Type\Accdetails $accdetails) : static
    {
        $new = clone $this;
        $new->accdetails = $accdetails;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    public function getNotice() : array
    {
        return $this->notice;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputnotice> $notice
     * @return static
     */
    public function withNotice(array $notice) : static
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }
}

