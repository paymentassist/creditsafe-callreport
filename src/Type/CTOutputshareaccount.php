<?php

namespace PaymentAssist\Type;

class CTOutputshareaccount
{
    /**
     * Supplier related details
     *
     * @var \PaymentAssist\Type\CTOutputshareaccountSupplierdetails
     */
    private \PaymentAssist\Type\CTOutputshareaccountSupplierdetails $supplierdetails;

    /**
     * Account holder related details
     *
     * @var \PaymentAssist\Type\CTOutputshareaccountAccholderdetails
     */
    private \PaymentAssist\Type\CTOutputshareaccountAccholderdetails $accholderdetails;

    /**
     * Default related details
     *
     * @var null | \PaymentAssist\Type\CTOutputshareaccountDefault
     */
    private ?\PaymentAssist\Type\CTOutputshareaccountDefault $default = null;

    /**
     * Delinquency related details
     *
     * @var null | \PaymentAssist\Type\CTOutputshareaccountDelinquent
     */
    private ?\PaymentAssist\Type\CTOutputshareaccountDelinquent $delinquent = null;

    /**
     * Account history
     *
     * @var \PaymentAssist\Type\CTOutputshareaccountAcchistory
     */
    private \PaymentAssist\Type\CTOutputshareaccountAcchistory $acchistory;

    /**
     * General account details
     *
     * @var \PaymentAssist\Type\CTOutputshareaccountAccdetails
     */
    private \PaymentAssist\Type\CTOutputshareaccountAccdetails $accdetails;

    /**
     * Set of Dispute and Correction Notices against an Account
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * @return \PaymentAssist\Type\CTOutputshareaccountSupplierdetails
     */
    public function getSupplierdetails(): \PaymentAssist\Type\CTOutputshareaccountSupplierdetails
    {
        return $this->supplierdetails;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputshareaccountSupplierdetails $supplierdetails
     * @return static
     */
    public function withSupplierdetails(\PaymentAssist\Type\CTOutputshareaccountSupplierdetails $supplierdetails): static
    {
        $new = clone $this;
        $new->supplierdetails = $supplierdetails;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputshareaccountAccholderdetails
     */
    public function getAccholderdetails(): \PaymentAssist\Type\CTOutputshareaccountAccholderdetails
    {
        return $this->accholderdetails;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputshareaccountAccholderdetails $accholderdetails
     * @return static
     */
    public function withAccholderdetails(\PaymentAssist\Type\CTOutputshareaccountAccholderdetails $accholderdetails): static
    {
        $new = clone $this;
        $new->accholderdetails = $accholderdetails;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputshareaccountDefault
     */
    public function getDefault(): ?\PaymentAssist\Type\CTOutputshareaccountDefault
    {
        return $this->default;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputshareaccountDefault $default
     * @return static
     */
    public function withDefault(?\PaymentAssist\Type\CTOutputshareaccountDefault $default): static
    {
        $new = clone $this;
        $new->default = $default;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputshareaccountDelinquent
     */
    public function getDelinquent(): ?\PaymentAssist\Type\CTOutputshareaccountDelinquent
    {
        return $this->delinquent;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputshareaccountDelinquent $delinquent
     * @return static
     */
    public function withDelinquent(?\PaymentAssist\Type\CTOutputshareaccountDelinquent $delinquent): static
    {
        $new = clone $this;
        $new->delinquent = $delinquent;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputshareaccountAcchistory
     */
    public function getAcchistory(): \PaymentAssist\Type\CTOutputshareaccountAcchistory
    {
        return $this->acchistory;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputshareaccountAcchistory $acchistory
     * @return static
     */
    public function withAcchistory(\PaymentAssist\Type\CTOutputshareaccountAcchistory $acchistory): static
    {
        $new = clone $this;
        $new->acchistory = $acchistory;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputshareaccountAccdetails
     */
    public function getAccdetails(): \PaymentAssist\Type\CTOutputshareaccountAccdetails
    {
        return $this->accdetails;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputshareaccountAccdetails $accdetails
     * @return static
     */
    public function withAccdetails(\PaymentAssist\Type\CTOutputshareaccountAccdetails $accdetails): static
    {
        $new = clone $this;
        $new->accdetails = $accdetails;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    public function getNotice(): array
    {
        return $this->notice;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputnotice> $notice
     * @return static
     */
    public function withNotice(array $notice): static
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }
}

