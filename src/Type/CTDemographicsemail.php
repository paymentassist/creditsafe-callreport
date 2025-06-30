<?php

namespace PaymentAssist\Type;

class CTDemographicsemail
{
    /**
     * Email Type Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsemailtype
     *
     * @var null | string
     */
    private ?string $type = null;

    /**
     * Email address
     *
     * @var null | string
     */
    private ?string $address = null;

    /**
     * @return null | string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return static
     */
    public function withType(?string $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }

    /**
     * @param null | string $address
     * @return static
     */
    public function withAddress(?string $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }
}

