<?php

namespace PaymentAssist\Type;

class Applicant extends CTOutputapplicant
{
    /**
     * Alert Decision, Alert Review and Household Override Information
     *
     * @var null | \PaymentAssist\Type\CTOutputthirdpartyalerts
     */
    private ?\PaymentAssist\Type\CTOutputthirdpartyalerts $tpd = null;

    /**
     * A collection of Opt-In Associate Credit Reports
     *
     * @var null | \PaymentAssist\Type\Oias
     */
    private ?\PaymentAssist\Type\Oias $oias = null;

    /**
     * @return null | \PaymentAssist\Type\CTOutputthirdpartyalerts
     */
    public function getTpd() : ?\PaymentAssist\Type\CTOutputthirdpartyalerts
    {
        return $this->tpd;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputthirdpartyalerts $tpd
     * @return static
     */
    public function withTpd(?\PaymentAssist\Type\CTOutputthirdpartyalerts $tpd) : static
    {
        $new = clone $this;
        $new->tpd = $tpd;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Oias
     */
    public function getOias() : ?\PaymentAssist\Type\Oias
    {
        return $this->oias;
    }

    /**
     * @param null | \PaymentAssist\Type\Oias $oias
     * @return static
     */
    public function withOias(?\PaymentAssist\Type\Oias $oias) : static
    {
        $new = clone $this;
        $new->oias = $oias;

        return $new;
    }
}

