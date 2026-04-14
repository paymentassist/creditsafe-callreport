<?php

namespace PaymentAssist\Type;

class CTInputaddressandmatchesName
{
    /**
     * Name details as entered by the user
     *
     * @var \PaymentAssist\Type\CTInputname
     */
    private \PaymentAssist\Type\CTInputname $nameinput;

    /**
     * Contains a set of name matches for this specific named individual
     *
     * @var \PaymentAssist\Type\CTInputaddressandmatchesNamematches
     */
    private \PaymentAssist\Type\CTInputaddressandmatchesNamematches $namematches;

    /**
     * Name identifier
     *
     * @var null | int
     */
    private ?int $nameid = null;

    /**
     * @return \PaymentAssist\Type\CTInputname
     */
    public function getNameinput(): \PaymentAssist\Type\CTInputname
    {
        return $this->nameinput;
    }

    /**
     * @param \PaymentAssist\Type\CTInputname $nameinput
     * @return static
     */
    public function withNameinput(\PaymentAssist\Type\CTInputname $nameinput): static
    {
        $new = clone $this;
        $new->nameinput = $nameinput;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTInputaddressandmatchesNamematches
     */
    public function getNamematches(): \PaymentAssist\Type\CTInputaddressandmatchesNamematches
    {
        return $this->namematches;
    }

    /**
     * @param \PaymentAssist\Type\CTInputaddressandmatchesNamematches $namematches
     * @return static
     */
    public function withNamematches(\PaymentAssist\Type\CTInputaddressandmatchesNamematches $namematches): static
    {
        $new = clone $this;
        $new->namematches = $namematches;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNameid(): ?int
    {
        return $this->nameid;
    }

    /**
     * @param null | int $nameid
     * @return static
     */
    public function withNameid(?int $nameid): static
    {
        $new = clone $this;
        $new->nameid = $nameid;

        return $new;
    }
}

