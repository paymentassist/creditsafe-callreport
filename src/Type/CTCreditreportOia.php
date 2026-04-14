<?php

namespace PaymentAssist\Type;

class CTCreditreportOia extends CTOutputapplicant
{
    /**
     * Summarised report data
     *
     * @var null | \PaymentAssist\Type\CTOutputsummaryblock
     */
    private ?\PaymentAssist\Type\CTOutputsummaryblock $summary = null;

    /**
     * Credit scores and reason codes
     *
     * @var null | \PaymentAssist\Type\CTCreditreportCreditscores
     */
    private ?\PaymentAssist\Type\CTCreditreportCreditscores $creditscores = null;

    /**
     * Address Confirmation data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportAddressconfs
     */
    private ?\PaymentAssist\Type\CTCreditreportAddressconfs $addressconfs = null;

    /**
     * Judgment data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportJudgments
     */
    private ?\PaymentAssist\Type\CTCreditreportJudgments $judgments = null;

    /**
     * Insolvency data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportBais
     */
    private ?\PaymentAssist\Type\CTCreditreportBais $bais = null;

    /**
     * Notice of Correction data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportNocs
     */
    private ?\PaymentAssist\Type\CTCreditreportNocs $nocs = null;

    /**
     * Search History data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportSearches
     */
    private ?\PaymentAssist\Type\CTCreditreportSearches $searches = null;

    /**
     * Address Links data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportAddresslinks
     */
    private ?\PaymentAssist\Type\CTCreditreportAddresslinks $addresslinks = null;

    /**
     * Alias Links data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportAliaslinks
     */
    private ?\PaymentAssist\Type\CTCreditreportAliaslinks $aliaslinks = null;

    /**
     * Associate Links data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportAssociatelinks
     */
    private ?\PaymentAssist\Type\CTCreditreportAssociatelinks $associatelinks = null;

    /**
     * CIFAS data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportCifas
     */
    private ?\PaymentAssist\Type\CTCreditreportCifas $cifas = null;

    /**
     * RTR data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportRtr
     */
    private ?\PaymentAssist\Type\CTCreditreportRtr $rtr = null;

    /**
     * SHARE data-set
     *
     * @var null | \PaymentAssist\Type\CTCreditreportAccs
     */
    private ?\PaymentAssist\Type\CTCreditreportAccs $accs = null;

    /**
     * Demographic data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics
     */
    private ?\PaymentAssist\Type\CTOutputdemographics $demographics = null;

    /**
     * CAMEO Analysis data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006 $demographics2006 = null;

    /**
     * Used to indicate type of report for a given applicant.
     * The list of possible values can be obtained from the web method LookupData07a table id = reporttype
     *
     * @var string
     */
    private string $reporttype;

    /**
     * A value of 1 indicates that the applicant has opted out of use of third party data. Note that the use of this attribute is required for the main report applicants. However for Opt-in Associate reports this attribute will not be added.
     *
     * @var null | int
     */
    private ?int $tpoptout = null;

    /**
     * A value of 1 indicates that the maximum number of Address Links to be searched has exceeded the limit defined in the Admin area.
     * Addresses not automatically searched can be searched manually.
     *
     * @var null | int
     */
    private ?int $autosearchmaxexceeded = null;

    /**
     * A value of 1 indicates that the applicant is under 18 or over 110 and/or deceased
     * The list of possible values can be obtained from the web method LookupData07a table id = ageinvalidcode
     *
     * @var null | int
     */
    private ?int $ageflag = null;

    /**
     * Applicant report title
     *
     * @var null | string
     */
    private ?string $reporttitle = null;

    /**
     * Unique Report Identifier for the Opt-in Associate Report (used for subsequent searches). Note that this differs from the main reports unique identifier.
     *
     * @var string
     */
    private string $searchid;

    /**
     * For enquiries producing auto-searched opt-in Associate reports, this attribute provides a pointer between an applicant's associate link and the corresponding opt-in associate report.
     *
     * @var null | int
     */
    private ?int $oiaid = null;

    /**
     * @return null | \PaymentAssist\Type\CTOutputsummaryblock
     */
    public function getSummary(): ?\PaymentAssist\Type\CTOutputsummaryblock
    {
        return $this->summary;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputsummaryblock $summary
     * @return static
     */
    public function withSummary(?\PaymentAssist\Type\CTOutputsummaryblock $summary): static
    {
        $new = clone $this;
        $new->summary = $summary;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportCreditscores
     */
    public function getCreditscores(): ?\PaymentAssist\Type\CTCreditreportCreditscores
    {
        return $this->creditscores;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportCreditscores $creditscores
     * @return static
     */
    public function withCreditscores(?\PaymentAssist\Type\CTCreditreportCreditscores $creditscores): static
    {
        $new = clone $this;
        $new->creditscores = $creditscores;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportAddressconfs
     */
    public function getAddressconfs(): ?\PaymentAssist\Type\CTCreditreportAddressconfs
    {
        return $this->addressconfs;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportAddressconfs $addressconfs
     * @return static
     */
    public function withAddressconfs(?\PaymentAssist\Type\CTCreditreportAddressconfs $addressconfs): static
    {
        $new = clone $this;
        $new->addressconfs = $addressconfs;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportJudgments
     */
    public function getJudgments(): ?\PaymentAssist\Type\CTCreditreportJudgments
    {
        return $this->judgments;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportJudgments $judgments
     * @return static
     */
    public function withJudgments(?\PaymentAssist\Type\CTCreditreportJudgments $judgments): static
    {
        $new = clone $this;
        $new->judgments = $judgments;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportBais
     */
    public function getBais(): ?\PaymentAssist\Type\CTCreditreportBais
    {
        return $this->bais;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportBais $bais
     * @return static
     */
    public function withBais(?\PaymentAssist\Type\CTCreditreportBais $bais): static
    {
        $new = clone $this;
        $new->bais = $bais;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportNocs
     */
    public function getNocs(): ?\PaymentAssist\Type\CTCreditreportNocs
    {
        return $this->nocs;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportNocs $nocs
     * @return static
     */
    public function withNocs(?\PaymentAssist\Type\CTCreditreportNocs $nocs): static
    {
        $new = clone $this;
        $new->nocs = $nocs;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportSearches
     */
    public function getSearches(): ?\PaymentAssist\Type\CTCreditreportSearches
    {
        return $this->searches;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportSearches $searches
     * @return static
     */
    public function withSearches(?\PaymentAssist\Type\CTCreditreportSearches $searches): static
    {
        $new = clone $this;
        $new->searches = $searches;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportAddresslinks
     */
    public function getAddresslinks(): ?\PaymentAssist\Type\CTCreditreportAddresslinks
    {
        return $this->addresslinks;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportAddresslinks $addresslinks
     * @return static
     */
    public function withAddresslinks(?\PaymentAssist\Type\CTCreditreportAddresslinks $addresslinks): static
    {
        $new = clone $this;
        $new->addresslinks = $addresslinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportAliaslinks
     */
    public function getAliaslinks(): ?\PaymentAssist\Type\CTCreditreportAliaslinks
    {
        return $this->aliaslinks;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportAliaslinks $aliaslinks
     * @return static
     */
    public function withAliaslinks(?\PaymentAssist\Type\CTCreditreportAliaslinks $aliaslinks): static
    {
        $new = clone $this;
        $new->aliaslinks = $aliaslinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportAssociatelinks
     */
    public function getAssociatelinks(): ?\PaymentAssist\Type\CTCreditreportAssociatelinks
    {
        return $this->associatelinks;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportAssociatelinks $associatelinks
     * @return static
     */
    public function withAssociatelinks(?\PaymentAssist\Type\CTCreditreportAssociatelinks $associatelinks): static
    {
        $new = clone $this;
        $new->associatelinks = $associatelinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportCifas
     */
    public function getCifas(): ?\PaymentAssist\Type\CTCreditreportCifas
    {
        return $this->cifas;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportCifas $cifas
     * @return static
     */
    public function withCifas(?\PaymentAssist\Type\CTCreditreportCifas $cifas): static
    {
        $new = clone $this;
        $new->cifas = $cifas;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportRtr
     */
    public function getRtr(): ?\PaymentAssist\Type\CTCreditreportRtr
    {
        return $this->rtr;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportRtr $rtr
     * @return static
     */
    public function withRtr(?\PaymentAssist\Type\CTCreditreportRtr $rtr): static
    {
        $new = clone $this;
        $new->rtr = $rtr;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTCreditreportAccs
     */
    public function getAccs(): ?\PaymentAssist\Type\CTCreditreportAccs
    {
        return $this->accs;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreportAccs $accs
     * @return static
     */
    public function withAccs(?\PaymentAssist\Type\CTCreditreportAccs $accs): static
    {
        $new = clone $this;
        $new->accs = $accs;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics
     */
    public function getDemographics(): ?\PaymentAssist\Type\CTOutputdemographics
    {
        return $this->demographics;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics $demographics
     * @return static
     */
    public function withDemographics(?\PaymentAssist\Type\CTOutputdemographics $demographics): static
    {
        $new = clone $this;
        $new->demographics = $demographics;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006
     */
    public function getDemographics2006(): ?\PaymentAssist\Type\CTOutputdemographics2006
    {
        return $this->demographics2006;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006 $demographics2006
     * @return static
     */
    public function withDemographics2006(?\PaymentAssist\Type\CTOutputdemographics2006 $demographics2006): static
    {
        $new = clone $this;
        $new->demographics2006 = $demographics2006;

        return $new;
    }

    /**
     * @return string
     */
    public function getReporttype(): string
    {
        return $this->reporttype;
    }

    /**
     * @param string $reporttype
     * @return static
     */
    public function withReporttype(string $reporttype): static
    {
        $new = clone $this;
        $new->reporttype = $reporttype;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTpoptout(): ?int
    {
        return $this->tpoptout;
    }

    /**
     * @param null | int $tpoptout
     * @return static
     */
    public function withTpoptout(?int $tpoptout): static
    {
        $new = clone $this;
        $new->tpoptout = $tpoptout;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAutosearchmaxexceeded(): ?int
    {
        return $this->autosearchmaxexceeded;
    }

    /**
     * @param null | int $autosearchmaxexceeded
     * @return static
     */
    public function withAutosearchmaxexceeded(?int $autosearchmaxexceeded): static
    {
        $new = clone $this;
        $new->autosearchmaxexceeded = $autosearchmaxexceeded;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAgeflag(): ?int
    {
        return $this->ageflag;
    }

    /**
     * @param null | int $ageflag
     * @return static
     */
    public function withAgeflag(?int $ageflag): static
    {
        $new = clone $this;
        $new->ageflag = $ageflag;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReporttitle(): ?string
    {
        return $this->reporttitle;
    }

    /**
     * @param null | string $reporttitle
     * @return static
     */
    public function withReporttitle(?string $reporttitle): static
    {
        $new = clone $this;
        $new->reporttitle = $reporttitle;

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
     * @return null | int
     */
    public function getOiaid(): ?int
    {
        return $this->oiaid;
    }

    /**
     * @param null | int $oiaid
     * @return static
     */
    public function withOiaid(?int $oiaid): static
    {
        $new = clone $this;
        $new->oiaid = $oiaid;

        return $new;
    }
}

