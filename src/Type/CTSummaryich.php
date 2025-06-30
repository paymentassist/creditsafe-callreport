<?php

namespace PaymentAssist\Type;

class CTSummaryich
{
    /**
     * A value of 1 indicates that Impaired Credit History has been detected
     *
     * @var int
     */
    private int $impairedcredit;

    /**
     * A value of 1 indicates that a mortgage account with a payment status of 3 or more in the last 24 months has been found
     *
     * @var null | int
     */
    private ?int $secured = null;

    /**
     * A value of 1 indicates that a loan accounts with a payment status of 3 or more in the last 24 months has been found
     *
     * @var null | int
     */
    private ?int $unsecured = null;

    /**
     * A value of 1 indicates that a Judgment with a total value greater than £500, in the last 36 months has been found
     *
     * @var null | int
     */
    private ?int $judgment = null;

    /**
     * A value of 1 indicates that a Individual Voluntary Arrangement, Administration Order, Debt Arrangement Scheme, Fast Track Voluntary Arrangement or Trust Deed in the last 36 months has been found
     *
     * @var null | int
     */
    private ?int $iva = null;

    /**
     * A value of 1 indicates that a Bankruptcy Order or Scottish Sequestration recorded in the last 36 months has been found
     *
     * @var null | int
     */
    private ?int $boss = null;

    /**
     * @return int
     */
    public function getImpairedcredit() : int
    {
        return $this->impairedcredit;
    }

    /**
     * @param int $impairedcredit
     * @return static
     */
    public function withImpairedcredit(int $impairedcredit) : static
    {
        $new = clone $this;
        $new->impairedcredit = $impairedcredit;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSecured() : ?int
    {
        return $this->secured;
    }

    /**
     * @param null | int $secured
     * @return static
     */
    public function withSecured(?int $secured) : static
    {
        $new = clone $this;
        $new->secured = $secured;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUnsecured() : ?int
    {
        return $this->unsecured;
    }

    /**
     * @param null | int $unsecured
     * @return static
     */
    public function withUnsecured(?int $unsecured) : static
    {
        $new = clone $this;
        $new->unsecured = $unsecured;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getJudgment() : ?int
    {
        return $this->judgment;
    }

    /**
     * @param null | int $judgment
     * @return static
     */
    public function withJudgment(?int $judgment) : static
    {
        $new = clone $this;
        $new->judgment = $judgment;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIva() : ?int
    {
        return $this->iva;
    }

    /**
     * @param null | int $iva
     * @return static
     */
    public function withIva(?int $iva) : static
    {
        $new = clone $this;
        $new->iva = $iva;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getBoss() : ?int
    {
        return $this->boss;
    }

    /**
     * @param null | int $boss
     * @return static
     */
    public function withBoss(?int $boss) : static
    {
        $new = clone $this;
        $new->boss = $boss;

        return $new;
    }
}

