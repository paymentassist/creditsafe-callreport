<?php

namespace PaymentAssist\Type;

class CTOutputdemographicsSocialclass
{
    /**
     * Social Class AB Indices
     *
     * @var null | int
     */
    private ?int $ab_ind = null;

    /**
     * Social Class C1 Indices
     *
     * @var null | int
     */
    private ?int $c1_ind = null;

    /**
     * Social Class C2 Indices
     *
     * @var null | int
     */
    private ?int $c2_ind = null;

    /**
     * Social Class DE Indices
     *
     * @var null | int
     */
    private ?int $de_ind = null;

    /**
     * @return null | int
     */
    public function getAb_ind(): ?int
    {
        return $this->ab_ind;
    }

    /**
     * @param null | int $ab_ind
     * @return static
     */
    public function withAb_ind(?int $ab_ind): static
    {
        $new = clone $this;
        $new->ab_ind = $ab_ind;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getC1_ind(): ?int
    {
        return $this->c1_ind;
    }

    /**
     * @param null | int $c1_ind
     * @return static
     */
    public function withC1_ind(?int $c1_ind): static
    {
        $new = clone $this;
        $new->c1_ind = $c1_ind;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getC2_ind(): ?int
    {
        return $this->c2_ind;
    }

    /**
     * @param null | int $c2_ind
     * @return static
     */
    public function withC2_ind(?int $c2_ind): static
    {
        $new = clone $this;
        $new->c2_ind = $c2_ind;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getDe_ind(): ?int
    {
        return $this->de_ind;
    }

    /**
     * @param null | int $de_ind
     * @return static
     */
    public function withDe_ind(?int $de_ind): static
    {
        $new = clone $this;
        $new->de_ind = $de_ind;

        return $new;
    }
}

