<?php

namespace PaymentAssist\Type;

class Family
{
    /**
     * Family Composition Descriptor
     *
     * @var null | string
     */
    private ?string $cameoukfam = null;

    /**
     * Single Adult Index
     *
     * @var null | int
     */
    private ?int $ind_adult1 = null;

    /**
     * @return null | string
     */
    public function getCameoukfam() : ?string
    {
        return $this->cameoukfam;
    }

    /**
     * @param null | string $cameoukfam
     * @return static
     */
    public function withCameoukfam(?string $cameoukfam) : static
    {
        $new = clone $this;
        $new->cameoukfam = $cameoukfam;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIndAdult1() : ?int
    {
        return $this->ind_adult1;
    }

    /**
     * @param null | int $ind_adult1
     * @return static
     */
    public function withIndAdult1(?int $ind_adult1) : static
    {
        $new = clone $this;
        $new->ind_adult1 = $ind_adult1;

        return $new;
    }
}

