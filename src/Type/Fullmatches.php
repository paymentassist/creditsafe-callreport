<?php

namespace PaymentAssist\Type;

class Fullmatches
{
    /**
     * Contains address details as found on the database as well as a series of name matching info
     *
     * @var array<int<0,max>, \PaymentAssist\Type\Fullmatch>
     */
    private array $fullmatch;

    /**
     * Used to indicate the type of report available for a given applicant address within the picklist.
     * The list of possible values can be obtained from the web method LookupData07a table id = reporttype
     *
     * @var null | string
     */
    private ?string $reporttype = null;

    /**
     * Status of user's selection for a given applicant address within the picklist
     * The list of possible values can be obtained from the web method LookupData07a table id = matchstatus
     *
     * @var null | string
     */
    private ?string $matchstatus = null;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\Fullmatch>
     */
    public function getFullmatch() : array
    {
        return $this->fullmatch;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\Fullmatch> $fullmatch
     * @return static
     */
    public function withFullmatch(array $fullmatch) : static
    {
        $new = clone $this;
        $new->fullmatch = $fullmatch;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReporttype() : ?string
    {
        return $this->reporttype;
    }

    /**
     * @param null | string $reporttype
     * @return static
     */
    public function withReporttype(?string $reporttype) : static
    {
        $new = clone $this;
        $new->reporttype = $reporttype;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMatchstatus() : ?string
    {
        return $this->matchstatus;
    }

    /**
     * @param null | string $matchstatus
     * @return static
     */
    public function withMatchstatus(?string $matchstatus) : static
    {
        $new = clone $this;
        $new->matchstatus = $matchstatus;

        return $new;
    }
}

