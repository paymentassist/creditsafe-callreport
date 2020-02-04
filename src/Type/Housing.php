<?php

namespace PaymentAssist\Type;

class Housing
{

    /**
     * @var string
     */
    private $cameoukhsg;

    /**
     * @var string
     */
    private $cameoukten;

    /**
     * @var int
     */
    private $natprice;

    /**
     * @var int
     */
    private $regprice;

    /**
     * @return string
     */
    public function getCameoukhsg()
    {
        return $this->cameoukhsg;
    }

    /**
     * @param string $cameoukhsg
     * @return Housing
     */
    public function withCameoukhsg($cameoukhsg)
    {
        $new = clone $this;
        $new->cameoukhsg = $cameoukhsg;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoukten()
    {
        return $this->cameoukten;
    }

    /**
     * @param string $cameoukten
     * @return Housing
     */
    public function withCameoukten($cameoukten)
    {
        $new = clone $this;
        $new->cameoukten = $cameoukten;

        return $new;
    }

    /**
     * @return int
     */
    public function getNatprice()
    {
        return $this->natprice;
    }

    /**
     * @param int $natprice
     * @return Housing
     */
    public function withNatprice($natprice)
    {
        $new = clone $this;
        $new->natprice = $natprice;

        return $new;
    }

    /**
     * @return int
     */
    public function getRegprice()
    {
        return $this->regprice;
    }

    /**
     * @param int $regprice
     * @return Housing
     */
    public function withRegprice($regprice)
    {
        $new = clone $this;
        $new->regprice = $regprice;

        return $new;
    }


}

