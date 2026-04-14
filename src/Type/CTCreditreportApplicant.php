<?php

namespace PaymentAssist\Type;

class CTCreditreportApplicant extends CTOutputapplicant
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
     * @var null | \PaymentAssist\Type\CTCreditreportOias
     */
    private ?\PaymentAssist\Type\CTCreditreportOias $oias = null;

    /**
     * @return null | \PaymentAssist\Type\CTOutputthirdpartyalerts
     */
    public function getTpd(): ?\PaymentAssist\Type\CTOutputthirdpartyalerts
    {
        return $this->tpd;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputthirdpartyalerts $tpd
     * @return static
     */
    public function withTpd(?\PaymentAssist\Type\CTOutputthirdpartyalerts $tpd): static
    {
        $new = clone $this;
        $new->tpd = $tpd;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportOias
     */
    public function getOias(): ?\PaymentAssist\Type\CTCreditreportOias
    {
        return $this->oias;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportOias $oias
     * @return static
     */
    public function withOias(?\PaymentAssist\Type\CTCreditreportOias $oias): static
    {
        $new = clone $this;
        $new->oias = $oias;

        return $new;
    }
}

