<?php

namespace PaymentAssist\Type;

class CTOutputassociatelink
{
    /**
     * Identifier required for Associate Link Navigation
     *
     * @var null | string
     */
    private ?string $navlinkid = null;

    /**
     * Name of the associate
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Date that Associate Link was created
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $creationdate;

    /**
     * Most recent date that the Associate Link was confirmed
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $lastconfdate;

    /**
     * Information regarding the supplier of the Associate Link
     *
     * @var \PaymentAssist\Type\CTSupplierdetails
     */
    private \PaymentAssist\Type\CTSupplierdetails $supplierdetails;

    /**
     * Set of Dispute Notices against an Associate Link
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * A value of 1 indicates that this is a declared address associate
     *
     * @var int
     */
    private int $declaredaddress;

    /**
     * For enquiries producing auto-searched opt-in associate reports, this attribute provides a pointer between an applicant's Associate Link and the corresponding opt-in associate report.
     *
     * @var null | int
     */
    private ?int $oiaid = null;

    /**
     * @return null | string
     */
    public function getNavlinkid(): ?string
    {
        return $this->navlinkid;
    }

    /**
     * @param null | string $navlinkid
     * @return static
     */
    public function withNavlinkid(?string $navlinkid): static
    {
        $new = clone $this;
        $new->navlinkid = $navlinkid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

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
    public function getDeclaredaddress(): int
    {
        return $this->declaredaddress;
    }

    /**
     * @param int $declaredaddress
     * @return static
     */
    public function withDeclaredaddress(int $declaredaddress): static
    {
        $new = clone $this;
        $new->declaredaddress = $declaredaddress;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOiaid(): ?int
    {
        return $this->oiaid;
    }

    /**
     * @param null | int $oiaid
     * @return static
     */
    public function withOiaid(?int $oiaid): static
    {
        $new = clone $this;
        $new->oiaid = $oiaid;

        return $new;
    }
}

