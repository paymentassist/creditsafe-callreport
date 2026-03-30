<?php

namespace PaymentAssist\Type;

class CTOutputaliaslink
{
    /**
     * Name that the applicant was known by before the Alias Link was received
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Name that applicant was known as after the Alias Link was received
     *
     * @var null | string
     */
    private ?string $alias = null;

    /**
     * Date that the Alias Link was created
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $creationdate;

    /**
     * Most recent date that the Alias Link was confirmed
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $lastconfdate;

    /**
     * Information regarding the supplier of the Alias Link
     *
     * @var \PaymentAssist\Type\CTSupplierdetails
     */
    private \PaymentAssist\Type\CTSupplierdetails $supplierdetails;

    /**
     * Set of Dispute Notices against an Alias Link
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * A value of 1 indicates that this alias was declared on input.
     *
     * @var int
     */
    private int $declared;

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
     * @return null | string
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param null | string $alias
     * @return static
     */
    public function withAlias(?string $alias): static
    {
        $new = clone $this;
        $new->alias = $alias;

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
    public function getDeclared(): int
    {
        return $this->declared;
    }

    /**
     * @param int $declared
     * @return static
     */
    public function withDeclared(int $declared): static
    {
        $new = clone $this;
        $new->declared = $declared;

        return $new;
    }
}

