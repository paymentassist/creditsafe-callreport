<?php

namespace PaymentAssist\Type;

class CTDemographicsidentity
{
    /**
     * Identity Type Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsidentitytype
     *
     * @var null | string
     */
    private ?string $type = null;

    /**
     * @return null | string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return static
     */
    public function withType(?string $type): static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }
}

