<?php

namespace PaymentAssist\Type;

class CTCreditreport
{
    /**
     * Credit Report
     *
     * @var non-empty-array<int<0,1>, \PaymentAssist\Type\CTCreditreportApplicant>
     */
    private array $applicant;

    /**
     * Unique Report Identifier (used for subsequent searches). Note that this is the same as the searchid element within the jobdetails block. Note that any included Opt-in Associate reports have their own unique identifier.
     *
     * @var string
     */
    private string $searchid;

    /**
     * Provides the link type of report (e.g. Address Link or Associate Link and other variants)
     * The list of possible values can be obtained from the web method LookupData07a table id = linkreporttype
     *
     * @var int
     */
    private int $linktype;

    /**
     * @return non-empty-array<int<0,1>, \PaymentAssist\Type\CTCreditreportApplicant>
     */
    public function getApplicant(): array
    {
        return $this->applicant;
    }

    /**
     * @param non-empty-array<int<0,1>, \PaymentAssist\Type\CTCreditreportApplicant> $applicant
     * @return static
     */
    public function withApplicant(array $applicant): static
    {
        $new = clone $this;
        $new->applicant = $applicant;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchid(): string
    {
        return $this->searchid;
    }

    /**
     * @param string $searchid
     * @return static
     */
    public function withSearchid(string $searchid): static
    {
        $new = clone $this;
        $new->searchid = $searchid;

        return $new;
    }

    /**
     * @return int
     */
    public function getLinktype(): int
    {
        return $this->linktype;
    }

    /**
     * @param int $linktype
     * @return static
     */
    public function withLinktype(int $linktype): static
    {
        $new = clone $this;
        $new->linktype = $linktype;

        return $new;
    }
}

