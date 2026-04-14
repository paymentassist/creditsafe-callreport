<?php

namespace PaymentAssist\Type;

class CTOutputcifasfilingCompany
{
    /**
     * Registered Company number
     *
     * @var null | string
     */
    private ?string $number = null;

    /**
     * Company name
     *
     * @var string
     */
    private string $name;

    /**
     * Address details
     *
     * @var null | \PaymentAssist\Type\CTOutputaddress
     */
    private ?\PaymentAssist\Type\CTOutputaddress $address = null;

    /**
     * @return null | string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param null | string $number
     * @return static
     */
    public function withNumber(?string $number): static
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return static
     */
    public function withName(string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

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
}

