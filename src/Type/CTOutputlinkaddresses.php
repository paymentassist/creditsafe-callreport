<?php

namespace PaymentAssist\Type;

class CTOutputlinkaddresses
{
    /**
     * Output structure for an Address held against an Address Link
     *
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputlinkaddress>
     */
    private array $address;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputlinkaddress>
     */
    public function getAddress(): array
    {
        return $this->address;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputlinkaddress> $address
     * @return static
     */
    public function withAddress(array $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }
}

