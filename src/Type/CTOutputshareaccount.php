<?php

namespace PaymentAssist\Type;

class CTOutputshareaccount
{

    /**
     * @var \PaymentAssist\Type\Supplierdetails
     */
    private $supplierdetails;

    /**
     * @var \PaymentAssist\Type\Accholderdetails
     */
    private $accholderdetails;

    /**
     * @var \PaymentAssist\Type\DefaultType
     */
    private $default;

    /**
     * @var \PaymentAssist\Type\Delinquent
     */
    private $delinquent;

    /**
     * @var \PaymentAssist\Type\Acchistory
     */
    private $acchistory;

    /**
     * @var \PaymentAssist\Type\Accdetails
     */
    private $accdetails;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @return \PaymentAssist\Type\Supplierdetails
     */
    public function getSupplierdetails()
    {
        return $this->supplierdetails;
    }

    /**
     * @param \PaymentAssist\Type\Supplierdetails $supplierdetails
     * @return CTOutputshareaccount
     */
    public function withSupplierdetails($supplierdetails)
    {
        $new = clone $this;
        $new->supplierdetails = $supplierdetails;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Accholderdetails
     */
    public function getAccholderdetails()
    {
        return $this->accholderdetails;
    }

    /**
     * @param \PaymentAssist\Type\Accholderdetails $accholderdetails
     * @return CTOutputshareaccount
     */
    public function withAccholderdetails($accholderdetails)
    {
        $new = clone $this;
        $new->accholderdetails = $accholderdetails;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\DefaultType
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param \PaymentAssist\Type\DefaultType $default
     * @return CTOutputshareaccount
     */
    public function withDefault($default)
    {
        $new = clone $this;
        $new->default = $default;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Delinquent
     */
    public function getDelinquent()
    {
        return $this->delinquent;
    }

    /**
     * @param \PaymentAssist\Type\Delinquent $delinquent
     * @return CTOutputshareaccount
     */
    public function withDelinquent($delinquent)
    {
        $new = clone $this;
        $new->delinquent = $delinquent;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Acchistory
     */
    public function getAcchistory()
    {
        return $this->acchistory;
    }

    /**
     * @param \PaymentAssist\Type\Acchistory $acchistory
     * @return CTOutputshareaccount
     */
    public function withAcchistory($acchistory)
    {
        $new = clone $this;
        $new->acchistory = $acchistory;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Accdetails
     */
    public function getAccdetails()
    {
        return $this->accdetails;
    }

    /**
     * @param \PaymentAssist\Type\Accdetails $accdetails
     * @return CTOutputshareaccount
     */
    public function withAccdetails($accdetails)
    {
        $new = clone $this;
        $new->accdetails = $accdetails;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputnotice
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputnotice $notice
     * @return CTOutputshareaccount
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }


}

