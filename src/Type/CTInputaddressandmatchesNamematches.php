<?php

namespace PaymentAssist\Type;

class CTInputaddressandmatchesNamematches
{
    /**
     * Contains name details as found on the database for an individual match
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatchesNamematch>
     */
    private array $namematch;

    /**
     * Used to indicate type of report available for a given applicant name and address within the picklist.
     * The list of possible values can be obtained from the web method LookupData07a table id = reporttype
     *
     * @var null | string
     */
    private ?string $reporttype = null;

    /**
     * Status of user's selection for a given applicant's name and address within the picklist
     * The list of possible values can be obtained from the web method LookupData07a table id = matchstatus
     *
     * @var null | string
     */
    private ?string $matchstatus = null;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatchesNamematch>
     */
    public function getNamematch(): array
    {
        return $this->namematch;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatchesNamematch> $namematch
     * @return static
     */
    public function withNamematch(array $namematch): static
    {
        $new = clone $this;
        $new->namematch = $namematch;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReporttype(): ?string
    {
        return $this->reporttype;
    }

    /**
     * @param null | string $reporttype
     * @return static
     */
    public function withReporttype(?string $reporttype): static
    {
        $new = clone $this;
        $new->reporttype = $reporttype;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMatchstatus(): ?string
    {
        return $this->matchstatus;
    }

    /**
     * @param null | string $matchstatus
     * @return static
     */
    public function withMatchstatus(?string $matchstatus): static
    {
        $new = clone $this;
        $new->matchstatus = $matchstatus;

        return $new;
    }
}

