<?php

namespace PaymentAssist\Type;

class CTSummaryich
{

    /**
     * @var int
     */
    private $impairedcredit;

    /**
     * @var int
     */
    private $secured;

    /**
     * @var int
     */
    private $unsecured;

    /**
     * @var int
     */
    private $judgment;

    /**
     * @var int
     */
    private $iva;

    /**
     * @var int
     */
    private $boss;

    /**
     * @return int
     */
    public function getImpairedcredit()
    {
        return $this->impairedcredit;
    }

    /**
     * @param int $impairedcredit
     * @return CTSummaryich
     */
    public function withImpairedcredit($impairedcredit)
    {
        $new = clone $this;
        $new->impairedcredit = $impairedcredit;

        return $new;
    }

    /**
     * @return int
     */
    public function getSecured()
    {
        return $this->secured;
    }

    /**
     * @param int $secured
     * @return CTSummaryich
     */
    public function withSecured($secured)
    {
        $new = clone $this;
        $new->secured = $secured;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnsecured()
    {
        return $this->unsecured;
    }

    /**
     * @param int $unsecured
     * @return CTSummaryich
     */
    public function withUnsecured($unsecured)
    {
        $new = clone $this;
        $new->unsecured = $unsecured;

        return $new;
    }

    /**
     * @return int
     */
    public function getJudgment()
    {
        return $this->judgment;
    }

    /**
     * @param int $judgment
     * @return CTSummaryich
     */
    public function withJudgment($judgment)
    {
        $new = clone $this;
        $new->judgment = $judgment;

        return $new;
    }

    /**
     * @return int
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * @param int $iva
     * @return CTSummaryich
     */
    public function withIva($iva)
    {
        $new = clone $this;
        $new->iva = $iva;

        return $new;
    }

    /**
     * @return int
     */
    public function getBoss()
    {
        return $this->boss;
    }

    /**
     * @param int $boss
     * @return CTSummaryich
     */
    public function withBoss($boss)
    {
        $new = clone $this;
        $new->boss = $boss;

        return $new;
    }


}

