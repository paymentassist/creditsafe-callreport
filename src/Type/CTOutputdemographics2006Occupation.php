<?php

namespace PaymentAssist\Type;

class CTOutputdemographics2006Occupation
{
    /**
     * Occupation Score
     *
     * @var null | float
     */
    private ?float $occscore = null;

    /**
     * Occupation Band
     *
     * @var null | int
     */
    private ?int $occband = null;

    /**
     * @return null | float
     */
    public function getOccscore(): ?float
    {
        return $this->occscore;
    }

    /**
     * @param null | float $occscore
     * @return static
     */
    public function withOccscore(?float $occscore): static
    {
        $new = clone $this;
        $new->occscore = $occscore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOccband(): ?int
    {
        return $this->occband;
    }

    /**
     * @param null | int $occband
     * @return static
     */
    public function withOccband(?int $occband): static
    {
        $new = clone $this;
        $new->occband = $occband;

        return $new;
    }
}

