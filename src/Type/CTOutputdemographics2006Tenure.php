<?php

namespace PaymentAssist\Type;

class CTOutputdemographics2006Tenure
{
    /**
     * Tenure Score
     *
     * @var null | float
     */
    private ?float $tenrscore = null;

    /**
     * Tenure Band
     *
     * @var null | int
     */
    private ?int $tenrband = null;

    /**
     * @return null | float
     */
    public function getTenrscore(): ?float
    {
        return $this->tenrscore;
    }

    /**
     * @param null | float $tenrscore
     * @return static
     */
    public function withTenrscore(?float $tenrscore): static
    {
        $new = clone $this;
        $new->tenrscore = $tenrscore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTenrband(): ?int
    {
        return $this->tenrband;
    }

    /**
     * @param null | int $tenrband
     * @return static
     */
    public function withTenrband(?int $tenrband): static
    {
        $new = clone $this;
        $new->tenrband = $tenrband;

        return $new;
    }
}

