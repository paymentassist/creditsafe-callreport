<?php

namespace PaymentAssist\Type;

class CTOutputdemographicsHousehold
{
    /**
     * Percentage of single adult households
     *
     * @var null | int
     */
    private ?int $adult_1 = null;

    /**
     * Percentage of two adult households
     *
     * @var null | int
     */
    private ?int $adults_2 = null;

    /**
     * Percentage of three or more adult households
     *
     * @var null | int
     */
    private ?int $adult_3pl = null;

    /**
     * @return null | int
     */
    public function getAdult_1(): ?int
    {
        return $this->adult_1;
    }

    /**
     * @param null | int $adult_1
     * @return static
     */
    public function withAdult_1(?int $adult_1): static
    {
        $new = clone $this;
        $new->adult_1 = $adult_1;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAdults_2(): ?int
    {
        return $this->adults_2;
    }

    /**
     * @param null | int $adults_2
     * @return static
     */
    public function withAdults_2(?int $adults_2): static
    {
        $new = clone $this;
        $new->adults_2 = $adults_2;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAdult_3pl(): ?int
    {
        return $this->adult_3pl;
    }

    /**
     * @param null | int $adult_3pl
     * @return static
     */
    public function withAdult_3pl(?int $adult_3pl): static
    {
        $new = clone $this;
        $new->adult_3pl = $adult_3pl;

        return $new;
    }
}

