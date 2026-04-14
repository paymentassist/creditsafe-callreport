<?php

namespace PaymentAssist\Type;

class CTDemographicstelephone
{
    /**
     * Telephone Type Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicstelephonetype
     *
     * @var null | string
     */
    private ?string $type = null;

    /**
     * Telephone STD Code
     *
     * @var null | string
     */
    private ?string $std = null;

    /**
     * Telephone Number
     *
     * @var null | string
     */
    private ?string $number = null;

    /**
     * Telephone Extension Number
     *
     * @var null | string
     */
    private ?string $extension = null;

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

    /**
     * @return null | string
     */
    public function getStd(): ?string
    {
        return $this->std;
    }

    /**
     * @param null | string $std
     * @return static
     */
    public function withStd(?string $std): static
    {
        $new = clone $this;
        $new->std = $std;

        return $new;
    }

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
     * @return null | string
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }

    /**
     * @param null | string $extension
     * @return static
     */
    public function withExtension(?string $extension): static
    {
        $new = clone $this;
        $new->extension = $extension;

        return $new;
    }
}

