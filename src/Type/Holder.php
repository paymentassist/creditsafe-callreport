<?php

namespace PaymentAssist\Type;

class Holder
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private $address;

    /**
     * @var \DateTimeInterface
     */
    private $dob;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Holder
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddress $address
     * @return Holder
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param \DateTimeInterface $dob
     * @return Holder
     */
    public function withDob($dob)
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }


}

