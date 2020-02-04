<?php

namespace PaymentAssist\Type;

class Family
{

    /**
     * @var string
     */
    private $cameoukfam;

    /**
     * @var int
     */
    private $ind_adult1;

    /**
     * @return string
     */
    public function getCameoukfam()
    {
        return $this->cameoukfam;
    }

    /**
     * @param string $cameoukfam
     * @return Family
     */
    public function withCameoukfam($cameoukfam)
    {
        $new = clone $this;
        $new->cameoukfam = $cameoukfam;

        return $new;
    }

    /**
     * @return int
     */
    public function getInd_adult1()
    {
        return $this->ind_adult1;
    }

    /**
     * @param int $ind_adult1
     * @return Family
     */
    public function withInd_adult1($ind_adult1)
    {
        $new = clone $this;
        $new->ind_adult1 = $ind_adult1;

        return $new;
    }


}

