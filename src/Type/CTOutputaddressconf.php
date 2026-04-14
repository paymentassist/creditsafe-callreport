<?php

namespace PaymentAssist\Type;

class CTOutputaddressconf
{
    /**
     * Confirmation of address details
     *
     * @var null | \PaymentAssist\Type\CTOutputaddress
     */
    private ?\PaymentAssist\Type\CTOutputaddress $address = null;

    /**
     * Contains residency based information for every individual that has resided on the Electoral Roll at this address (includes non family individuals)
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTAddressconfresident>
     */
    private array $resident;

    /**
     * A value of 1 indicates that the address was found on the Postcode Address File
     *
     * @var null | int
     */
    private ?int $pafvalid = null;

    /**
     * This flag is only provided on Limited Subject Access Reports (LSAR)
     *
     * @var null | int
     */
    private ?int $otherresidents = null;

    /**
     * @return null | \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress(): ?\PaymentAssist\Type\CTOutputaddress
    {
        return $this->address;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputaddress $address
     * @return static
     */
    public function withAddress(?\PaymentAssist\Type\CTOutputaddress $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTAddressconfresident>
     */
    public function getResident(): array
    {
        return $this->resident;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTAddressconfresident> $resident
     * @return static
     */
    public function withResident(array $resident): static
    {
        $new = clone $this;
        $new->resident = $resident;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPafvalid(): ?int
    {
        return $this->pafvalid;
    }

    /**
     * @param null | int $pafvalid
     * @return static
     */
    public function withPafvalid(?int $pafvalid): static
    {
        $new = clone $this;
        $new->pafvalid = $pafvalid;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOtherresidents(): ?int
    {
        return $this->otherresidents;
    }

    /**
     * @param null | int $otherresidents
     * @return static
     */
    public function withOtherresidents(?int $otherresidents): static
    {
        $new = clone $this;
        $new->otherresidents = $otherresidents;

        return $new;
    }
}

