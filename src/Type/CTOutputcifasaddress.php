<?php

namespace PaymentAssist\Type;

class CTOutputcifasaddress
{
    /**
     * CIFAS Address Type
     * The list of possible values can be obtained from the web method LookupData07a table id = cifasaddresstype
     *
     * @var string
     */
    private string $type;

    /**
     * Address details
     *
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private \PaymentAssist\Type\CTOutputaddress $address;

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return static
     */
    public function withType(string $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress() : \PaymentAssist\Type\CTOutputaddress
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddress $address
     * @return static
     */
    public function withAddress(\PaymentAssist\Type\CTOutputaddress $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }
}

