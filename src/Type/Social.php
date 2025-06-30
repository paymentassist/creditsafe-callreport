<?php

namespace PaymentAssist\Type;

class Social
{
    /**
     * Proportion of "Millionaire Club" households in postcode.
     *
     * @var null | float
     */
    private ?float $millhhld = null;

    /**
     * Proportion of company director households in postcode.
     *
     * @var null | float
     */
    private ?float $dirhhld = null;

    /**
     * Social Class Score
     *
     * @var null | float
     */
    private ?float $socscore = null;

    /**
     * Social Class Band
     *
     * @var null | int
     */
    private ?int $socband = null;

    /**
     * @return null | float
     */
    public function getMillhhld() : ?float
    {
        return $this->millhhld;
    }

    /**
     * @param null | float $millhhld
     * @return static
     */
    public function withMillhhld(?float $millhhld) : static
    {
        $new = clone $this;
        $new->millhhld = $millhhld;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getDirhhld() : ?float
    {
        return $this->dirhhld;
    }

    /**
     * @param null | float $dirhhld
     * @return static
     */
    public function withDirhhld(?float $dirhhld) : static
    {
        $new = clone $this;
        $new->dirhhld = $dirhhld;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getSocscore() : ?float
    {
        return $this->socscore;
    }

    /**
     * @param null | float $socscore
     * @return static
     */
    public function withSocscore(?float $socscore) : static
    {
        $new = clone $this;
        $new->socscore = $socscore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSocband() : ?int
    {
        return $this->socband;
    }

    /**
     * @param null | int $socband
     * @return static
     */
    public function withSocband(?int $socband) : static
    {
        $new = clone $this;
        $new->socband = $socband;

        return $new;
    }
}

