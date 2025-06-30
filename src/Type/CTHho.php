<?php

namespace PaymentAssist\Type;

class CTHho
{
    /**
     * Summarised Scores for Household Override Individuals
     *
     * @var null | \PaymentAssist\Type\Creditscores
     */
    private ?\PaymentAssist\Type\Creditscores $creditscores = null;

    /**
     * Household Override Summary Block
     *
     * @var null | \PaymentAssist\Type\CTHhosummary
     */
    private ?\PaymentAssist\Type\CTHhosummary $summary = null;

    /**
     * A value of 1 indicates that this applicant has a thin file required for consideration of HHO.
     *
     * @var int
     */
    private int $thinfile;

    /**
     * Total number of Individuals that meet HHO criteria
     *
     * @var int
     */
    private int $total;

    /**
     * @return null | \PaymentAssist\Type\Creditscores
     */
    public function getCreditscores() : ?\PaymentAssist\Type\Creditscores
    {
        return $this->creditscores;
    }

    /**
     * @param null | \PaymentAssist\Type\Creditscores $creditscores
     * @return static
     */
    public function withCreditscores(?\PaymentAssist\Type\Creditscores $creditscores) : static
    {
        $new = clone $this;
        $new->creditscores = $creditscores;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTHhosummary
     */
    public function getSummary() : ?\PaymentAssist\Type\CTHhosummary
    {
        return $this->summary;
    }

    /**
     * @param null | \PaymentAssist\Type\CTHhosummary $summary
     * @return static
     */
    public function withSummary(?\PaymentAssist\Type\CTHhosummary $summary) : static
    {
        $new = clone $this;
        $new->summary = $summary;

        return $new;
    }

    /**
     * @return int
     */
    public function getThinfile() : int
    {
        return $this->thinfile;
    }

    /**
     * @param int $thinfile
     * @return static
     */
    public function withThinfile(int $thinfile) : static
    {
        $new = clone $this;
        $new->thinfile = $thinfile;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return static
     */
    public function withTotal(int $total) : static
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }
}

