<?php

namespace PaymentAssist\Type;

class Addresslinks
{

    /**
     * @var \PaymentAssist\Type\CTOutputlinkaddresses
     */
    private $addresses;

    /**
     * @var \PaymentAssist\Type\CTOutputaddresslinks
     */
    private $links;

    /**
     * @return \PaymentAssist\Type\CTOutputlinkaddresses
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputlinkaddresses $addresses
     * @return Addresslinks
     */
    public function withAddresses($addresses)
    {
        $new = clone $this;
        $new->addresses = $addresses;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputaddresslinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddresslinks $links
     * @return Addresslinks
     */
    public function withLinks($links)
    {
        $new = clone $this;
        $new->links = $links;

        return $new;
    }


}

