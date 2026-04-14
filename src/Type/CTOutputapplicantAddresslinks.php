<?php

namespace PaymentAssist\Type;

class CTOutputapplicantAddresslinks
{
    /**
     * Output structure for Addresses held against Address Links
     *
     * @var null | \PaymentAssist\Type\CTOutputlinkaddresses
     */
    private ?\PaymentAssist\Type\CTOutputlinkaddresses $addresses = null;

    /**
     * Output structure for Address Links
     *
     * @var null | \PaymentAssist\Type\CTOutputaddresslinks
     */
    private ?\PaymentAssist\Type\CTOutputaddresslinks $links = null;

    /**
     * @return null | \PaymentAssist\Type\CTOutputlinkaddresses
     */
    public function getAddresses(): ?\PaymentAssist\Type\CTOutputlinkaddresses
    {
        return $this->addresses;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputlinkaddresses $addresses
     * @return static
     */
    public function withAddresses(?\PaymentAssist\Type\CTOutputlinkaddresses $addresses): static
    {
        $new = clone $this;
        $new->addresses = $addresses;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputaddresslinks
     */
    public function getLinks(): ?\PaymentAssist\Type\CTOutputaddresslinks
    {
        return $this->links;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputaddresslinks $links
     * @return static
     */
    public function withLinks(?\PaymentAssist\Type\CTOutputaddresslinks $links): static
    {
        $new = clone $this;
        $new->links = $links;

        return $new;
    }
}

