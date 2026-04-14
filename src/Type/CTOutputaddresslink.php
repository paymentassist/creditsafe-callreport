<?php

namespace PaymentAssist\Type;

class CTOutputaddresslink
{
    /**
     * Date that the supplied Address Link was created
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $creationdate;

    /**
     * Most recent date that the supplied Address Link was confirmed
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $lastconfdate;

    /**
     * Information regarding the supplier of the Address Link
     *
     * @var \PaymentAssist\Type\CTSupplierdetails
     */
    private \PaymentAssist\Type\CTSupplierdetails $supplierdetails;

    /**
     * Set of Dispute Notices against an Address Link
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * The addressid that represents the from address of the Address Link
     * The id relates to the addressid on one of the address elements within CT_outputlinkaddress
     *
     * @var int
     */
    private int $from;

    /**
     * The addressid that represents the to address of the Address Link
     * The id relates to the addressid on one of the address elements within CT_outputlinkaddress
     *
     * @var int
     */
    private int $to;

    /**
     * @return \DateTimeInterface
     */
    public function getCreationdate(): \DateTimeInterface
    {
        return $this->creationdate;
    }

    /**
     * @param \DateTimeInterface $creationdate
     * @return static
     */
    public function withCreationdate(\DateTimeInterface $creationdate): static
    {
        $new = clone $this;
        $new->creationdate = $creationdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastconfdate(): \DateTimeInterface
    {
        return $this->lastconfdate;
    }

    /**
     * @param \DateTimeInterface $lastconfdate
     * @return static
     */
    public function withLastconfdate(\DateTimeInterface $lastconfdate): static
    {
        $new = clone $this;
        $new->lastconfdate = $lastconfdate;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSupplierdetails
     */
    public function getSupplierdetails(): \PaymentAssist\Type\CTSupplierdetails
    {
        return $this->supplierdetails;
    }

    /**
     * @param \PaymentAssist\Type\CTSupplierdetails $supplierdetails
     * @return static
     */
    public function withSupplierdetails(\PaymentAssist\Type\CTSupplierdetails $supplierdetails): static
    {
        $new = clone $this;
        $new->supplierdetails = $supplierdetails;

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

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     * @return static
     */
    public function withFrom(int $from): static
    {
        $new = clone $this;
        $new->from = $from;

        return $new;
    }

    /**
     * @return int
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * @param int $to
     * @return static
     */
    public function withTo(int $to): static
    {
        $new = clone $this;
        $new->to = $to;

        return $new;
    }
}

