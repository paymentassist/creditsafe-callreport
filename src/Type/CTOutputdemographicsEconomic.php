<?php

namespace PaymentAssist\Type;

class CTOutputdemographicsEconomic
{
    /**
     * Average Percentage unemployed
     *
     * @var null | float
     */
    private ?float $unem_prob = null;

    /**
     * Index of economic inactivity
     *
     * @var null | int
     */
    private ?int $unem_index = null;

    /**
     * @return null | float
     */
    public function getUnem_prob(): ?float
    {
        return $this->unem_prob;
    }

    /**
     * @param null | float $unem_prob
     * @return static
     */
    public function withUnem_prob(?float $unem_prob): static
    {
        $new = clone $this;
        $new->unem_prob = $unem_prob;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUnem_index(): ?int
    {
        return $this->unem_index;
    }

    /**
     * @param null | int $unem_index
     * @return static
     */
    public function withUnem_index(?int $unem_index): static
    {
        $new = clone $this;
        $new->unem_index = $unem_index;

        return $new;
    }
}

