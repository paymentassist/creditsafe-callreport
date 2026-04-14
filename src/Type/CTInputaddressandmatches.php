<?php

namespace PaymentAssist\Type;

class CTInputaddressandmatches
{
    /**
     * Address details as entered by the user
     *
     * @var \PaymentAssist\Type\CTAddress
     */
    private \PaymentAssist\Type\CTAddress $addressinput;

    /**
     * Contains a set of matches for this specific address
     *
     * @var \PaymentAssist\Type\CTInputaddressandmatchesFullmatches
     */
    private \PaymentAssist\Type\CTInputaddressandmatchesFullmatches $fullmatches;

    /**
     * Address identifier
     *
     * @var null | int
     */
    private ?int $addressid = null;

    /**
     * @return \PaymentAssist\Type\CTAddress
     */
    public function getAddressinput(): \PaymentAssist\Type\CTAddress
    {
        return $this->addressinput;
    }

    /**
     * @param \PaymentAssist\Type\CTAddress $addressinput
     * @return static
     */
    public function withAddressinput(\PaymentAssist\Type\CTAddress $addressinput): static
    {
        $new = clone $this;
        $new->addressinput = $addressinput;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTInputaddressandmatchesFullmatches
     */
    public function getFullmatches(): \PaymentAssist\Type\CTInputaddressandmatchesFullmatches
    {
        return $this->fullmatches;
    }

    /**
     * @param \PaymentAssist\Type\CTInputaddressandmatchesFullmatches $fullmatches
     * @return static
     */
    public function withFullmatches(\PaymentAssist\Type\CTInputaddressandmatchesFullmatches $fullmatches): static
    {
        $new = clone $this;
        $new->fullmatches = $fullmatches;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAddressid(): ?int
    {
        return $this->addressid;
    }

    /**
     * @param null | int $addressid
     * @return static
     */
    public function withAddressid(?int $addressid): static
    {
        $new = clone $this;
        $new->addressid = $addressid;

        return $new;
    }
}

