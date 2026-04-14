<?php

namespace PaymentAssist\Type;

class CTOutputdemographics2006Mortgage
{
    /**
     * Mortgage and House Size Score
     *
     * @var null | float
     */
    private ?float $mortscore = null;

    /**
     * Mortgage and House Size Band
     *
     * @var null | int
     */
    private ?int $mortband = null;

    /**
     * @return null | float
     */
    public function getMortscore(): ?float
    {
        return $this->mortscore;
    }

    /**
     * @param null | float $mortscore
     * @return static
     */
    public function withMortscore(?float $mortscore): static
    {
        $new = clone $this;
        $new->mortscore = $mortscore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMortband(): ?int
    {
        return $this->mortband;
    }

    /**
     * @param null | int $mortband
     * @return static
     */
    public function withMortband(?int $mortband): static
    {
        $new = clone $this;
        $new->mortband = $mortband;

        return $new;
    }
}

