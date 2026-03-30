<?php

namespace PaymentAssist\Type;

class CTOutputdemographics2006Economic
{
    /**
     * Economic Activity Score
     *
     * @var null | float
     */
    private ?float $econscore = null;

    /**
     * Economic Activity Band
     *
     * @var null | int
     */
    private ?int $econband = null;

    /**
     * @return null | float
     */
    public function getEconscore(): ?float
    {
        return $this->econscore;
    }

    /**
     * @param null | float $econscore
     * @return static
     */
    public function withEconscore(?float $econscore): static
    {
        $new = clone $this;
        $new->econscore = $econscore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getEconband(): ?int
    {
        return $this->econband;
    }

    /**
     * @param null | int $econband
     * @return static
     */
    public function withEconband(?int $econband): static
    {
        $new = clone $this;
        $new->econband = $econband;

        return $new;
    }
}

