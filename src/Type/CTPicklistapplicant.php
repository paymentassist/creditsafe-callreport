<?php

namespace PaymentAssist\Type;

class CTPicklistapplicant
{
    /**
     * Set of full matches and input details relating to a single address (current or previous)
     *
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatches>
     */
    private array $address;

    /**
     * Applicant identifier
     *
     * @var null | int
     */
    private ?int $id = null;

    /**
     * Used to indicate type of report available for a given applicant within the picklist.
     * The list of possible values can be obtained from the web method LookupData07a table id = reporttype
     *
     * @var null | string
     */
    private ?string $reporttype = null;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatches>
     */
    public function getAddress() : array
    {
        return $this->address;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\CTInputaddressandmatches> $address
     * @return static
     */
    public function withAddress(array $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * @param null | int $id
     * @return static
     */
    public function withId(?int $id) : static
    {
        $new = clone $this;
        $new->id = $id;

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
}

