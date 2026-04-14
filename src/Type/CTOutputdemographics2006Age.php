<?php

namespace PaymentAssist\Type;

class CTOutputdemographics2006Age
{
    /**
     * Age Score
     *
     * @var null | float
     */
    private ?float $agescore = null;

    /**
     * Age Band
     *
     * @var null | int
     */
    private ?int $ageband = null;

    /**
     * @return null | float
     */
    public function getAgescore(): ?float
    {
        return $this->agescore;
    }

    /**
     * @param null | float $agescore
     * @return static
     */
    public function withAgescore(?float $agescore): static
    {
        $new = clone $this;
        $new->agescore = $agescore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAgeband(): ?int
    {
        return $this->ageband;
    }

    /**
     * @param null | int $ageband
     * @return static
     */
    public function withAgeband(?int $ageband): static
    {
        $new = clone $this;
        $new->ageband = $ageband;

        return $new;
    }
}

