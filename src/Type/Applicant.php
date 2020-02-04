<?php

namespace PaymentAssist\Type;

class Applicant
{

    /**
     * @var \PaymentAssist\Type\CTOutputthirdpartyalerts
     */
    private $tpd;

    /**
     * @var \PaymentAssist\Type\Oias
     */
    private $oias;

    /**
     * @return \PaymentAssist\Type\CTOutputthirdpartyalerts
     */
    public function getTpd()
    {
        return $this->tpd;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputthirdpartyalerts $tpd
     * @return Applicant
     */
    public function withTpd($tpd)
    {
        $new = clone $this;
        $new->tpd = $tpd;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Oias
     */
    public function getOias()
    {
        return $this->oias;
    }

    /**
     * @param \PaymentAssist\Type\Oias $oias
     * @return Applicant
     */
    public function withOias($oias)
    {
        $new = clone $this;
        $new->oias = $oias;

        return $new;
    }


}

