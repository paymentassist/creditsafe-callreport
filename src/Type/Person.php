<?php

namespace PaymentAssist\Type;

class Person
{
    /**
     * Name details
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Date of birth
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dob = null;

    /**
     * Address details
     *
     * @var null | \PaymentAssist\Type\CTOutputaddress
     */
    private ?\PaymentAssist\Type\CTOutputaddress $address = null;

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDob() : ?\DateTimeInterface
    {
        return $this->dob;
    }

    /**
     * @param null | \DateTimeInterface $dob
     * @return static
     */
    public function withDob(?\DateTimeInterface $dob) : static
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress() : ?\PaymentAssist\Type\CTOutputaddress
    {
        return $this->address;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputaddress $address
     * @return static
     */
    public function withAddress(?\PaymentAssist\Type\CTOutputaddress $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }
}

