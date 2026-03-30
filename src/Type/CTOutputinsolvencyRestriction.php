<?php

namespace PaymentAssist\Type;

class CTOutputinsolvencyRestriction
{
    /**
     * Restriction type
     * The list of possible values can be obtained from the web method LookupData07a table id = insolvencyrestrictiontype
     *
     * @var null | string
     */
    private ?string $type = null;

    /**
     * Restriction start date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $startdate = null;

    /**
     * Restriction end date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $enddate = null;

    /**
     * @return null | string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return static
     */
    public function withType(?string $type): static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    /**
     * @param null | \DateTimeInterface $startdate
     * @return static
     */
    public function withStartdate(?\DateTimeInterface $startdate): static
    {
        $new = clone $this;
        $new->startdate = $startdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    /**
     * @param null | \DateTimeInterface $enddate
     * @return static
     */
    public function withEnddate(?\DateTimeInterface $enddate): static
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }
}

