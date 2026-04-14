<?php

namespace PaymentAssist\Type;

class CTInputaddressandmatchesFullmatch
{
    /**
     * Matched address details as recorded on the database
     *
     * @var \PaymentAssist\Type\CTInputaddressandmatchesAddressmatch
     */
    private \PaymentAssist\Type\CTInputaddressandmatchesAddressmatch $addressmatch;

    /**
     * Input name details and a set of name matches for either the primary name or an alias
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatchesName>
     */
    private array $name;

    /**
     * A value of 1 indicates that this address match is selected
     *
     * @var null | int
     */
    private ?int $selected = null;

    /**
     * @return \PaymentAssist\Type\CTInputaddressandmatchesAddressmatch
     */
    public function getAddressmatch(): \PaymentAssist\Type\CTInputaddressandmatchesAddressmatch
    {
        return $this->addressmatch;
    }

    /**
     * @param \PaymentAssist\Type\CTInputaddressandmatchesAddressmatch $addressmatch
     * @return static
     */
    public function withAddressmatch(\PaymentAssist\Type\CTInputaddressandmatchesAddressmatch $addressmatch): static
    {
        $new = clone $this;
        $new->addressmatch = $addressmatch;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatchesName>
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatchesName> $name
     * @return static
     */
    public function withName(array $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSelected(): ?int
    {
        return $this->selected;
    }

    /**
     * @param null | int $selected
     * @return static
     */
    public function withSelected(?int $selected): static
    {
        $new = clone $this;
        $new->selected = $selected;

        return $new;
    }
}

