<?php

namespace PaymentAssist\Type;

class Housing
{
    /**
     * Housing Type descriptor
     *
     * @var null | string
     */
    private ?string $cameoukhsg = null;

    /**
     * Housing Tenure descriptor
     *
     * @var null | string
     */
    private ?string $cameoukten = null;

    /**
     * Index of property price against national average
     *
     * @var null | int
     */
    private ?int $natprice = null;

    /**
     * Index of property price against regional average
     *
     * @var null | int
     */
    private ?int $regprice = null;

    /**
     * @return null | string
     */
    public function getCameoukhsg() : ?string
    {
        return $this->cameoukhsg;
    }

    /**
     * @param null | string $cameoukhsg
     * @return static
     */
    public function withCameoukhsg(?string $cameoukhsg) : static
    {
        $new = clone $this;
        $new->cameoukhsg = $cameoukhsg;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoukten() : ?string
    {
        return $this->cameoukten;
    }

    /**
     * @param null | string $cameoukten
     * @return static
     */
    public function withCameoukten(?string $cameoukten) : static
    {
        $new = clone $this;
        $new->cameoukten = $cameoukten;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNatprice() : ?int
    {
        return $this->natprice;
    }

    /**
     * @param null | int $natprice
     * @return static
     */
    public function withNatprice(?int $natprice) : static
    {
        $new = clone $this;
        $new->natprice = $natprice;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRegprice() : ?int
    {
        return $this->regprice;
    }

    /**
     * @param null | int $regprice
     * @return static
     */
    public function withRegprice(?int $regprice) : static
    {
        $new = clone $this;
        $new->regprice = $regprice;

        return $new;
    }
}

