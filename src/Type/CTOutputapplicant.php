<?php

namespace PaymentAssist\Type;

class CTOutputapplicant
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
     * @var null | \PaymentAssist\Type\CTOutputapplicantCreditscores
     */
    private ?\PaymentAssist\Type\CTOutputapplicantCreditscores $creditscores = null;

    /**
     * Address Confirmation data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantAddressconfs
     */
    private ?\PaymentAssist\Type\CTOutputapplicantAddressconfs $addressconfs = null;

    /**
     * Judgment data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantJudgments
     */
    private ?\PaymentAssist\Type\CTOutputapplicantJudgments $judgments = null;

    /**
     * Insolvency data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantBais
     */
    private ?\PaymentAssist\Type\CTOutputapplicantBais $bais = null;

    /**
     * Notice of Correction data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantNocs
     */
    private ?\PaymentAssist\Type\CTOutputapplicantNocs $nocs = null;

    /**
     * Search History data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantSearches
     */
    private ?\PaymentAssist\Type\CTOutputapplicantSearches $searches = null;

    /**
     * Address Links data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantAddresslinks
     */
    private ?\PaymentAssist\Type\CTOutputapplicantAddresslinks $addresslinks = null;

    /**
     * Alias Links data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantAliaslinks
     */
    private ?\PaymentAssist\Type\CTOutputapplicantAliaslinks $aliaslinks = null;

    /**
     * Associate Links data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantAssociatelinks
     */
    private ?\PaymentAssist\Type\CTOutputapplicantAssociatelinks $associatelinks = null;

    /**
     * CIFAS data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantCifas
     */
    private ?\PaymentAssist\Type\CTOutputapplicantCifas $cifas = null;

    /**
     * RTR data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantRtr
     */
    private ?\PaymentAssist\Type\CTOutputapplicantRtr $rtr = null;

    /**
     * SHARE data-set
     *
     * @var null | \PaymentAssist\Type\CTOutputapplicantAccs
     */
    private ?\PaymentAssist\Type\CTOutputapplicantAccs $accs = null;

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
     * @return null | \PaymentAssist\Type\CTOutputapplicantCreditscores
     */
    public function getCreditscores(): ?\PaymentAssist\Type\CTOutputapplicantCreditscores
    {
        return $this->creditscores;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantCreditscores $creditscores
     * @return static
     */
    public function withCreditscores(?\PaymentAssist\Type\CTOutputapplicantCreditscores $creditscores): static
    {
        $new = clone $this;
        $new->creditscores = $creditscores;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantAddressconfs
     */
    public function getAddressconfs(): ?\PaymentAssist\Type\CTOutputapplicantAddressconfs
    {
        return $this->addressconfs;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantAddressconfs $addressconfs
     * @return static
     */
    public function withAddressconfs(?\PaymentAssist\Type\CTOutputapplicantAddressconfs $addressconfs): static
    {
        $new = clone $this;
        $new->addressconfs = $addressconfs;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantJudgments
     */
    public function getJudgments(): ?\PaymentAssist\Type\CTOutputapplicantJudgments
    {
        return $this->judgments;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantJudgments $judgments
     * @return static
     */
    public function withJudgments(?\PaymentAssist\Type\CTOutputapplicantJudgments $judgments): static
    {
        $new = clone $this;
        $new->judgments = $judgments;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantBais
     */
    public function getBais(): ?\PaymentAssist\Type\CTOutputapplicantBais
    {
        return $this->bais;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantBais $bais
     * @return static
     */
    public function withBais(?\PaymentAssist\Type\CTOutputapplicantBais $bais): static
    {
        $new = clone $this;
        $new->bais = $bais;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantNocs
     */
    public function getNocs(): ?\PaymentAssist\Type\CTOutputapplicantNocs
    {
        return $this->nocs;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantNocs $nocs
     * @return static
     */
    public function withNocs(?\PaymentAssist\Type\CTOutputapplicantNocs $nocs): static
    {
        $new = clone $this;
        $new->nocs = $nocs;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantSearches
     */
    public function getSearches(): ?\PaymentAssist\Type\CTOutputapplicantSearches
    {
        return $this->searches;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantSearches $searches
     * @return static
     */
    public function withSearches(?\PaymentAssist\Type\CTOutputapplicantSearches $searches): static
    {
        $new = clone $this;
        $new->searches = $searches;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantAddresslinks
     */
    public function getAddresslinks(): ?\PaymentAssist\Type\CTOutputapplicantAddresslinks
    {
        return $this->addresslinks;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantAddresslinks $addresslinks
     * @return static
     */
    public function withAddresslinks(?\PaymentAssist\Type\CTOutputapplicantAddresslinks $addresslinks): static
    {
        $new = clone $this;
        $new->addresslinks = $addresslinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantAliaslinks
     */
    public function getAliaslinks(): ?\PaymentAssist\Type\CTOutputapplicantAliaslinks
    {
        return $this->aliaslinks;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantAliaslinks $aliaslinks
     * @return static
     */
    public function withAliaslinks(?\PaymentAssist\Type\CTOutputapplicantAliaslinks $aliaslinks): static
    {
        $new = clone $this;
        $new->aliaslinks = $aliaslinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantAssociatelinks
     */
    public function getAssociatelinks(): ?\PaymentAssist\Type\CTOutputapplicantAssociatelinks
    {
        return $this->associatelinks;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantAssociatelinks $associatelinks
     * @return static
     */
    public function withAssociatelinks(?\PaymentAssist\Type\CTOutputapplicantAssociatelinks $associatelinks): static
    {
        $new = clone $this;
        $new->associatelinks = $associatelinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantCifas
     */
    public function getCifas(): ?\PaymentAssist\Type\CTOutputapplicantCifas
    {
        return $this->cifas;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantCifas $cifas
     * @return static
     */
    public function withCifas(?\PaymentAssist\Type\CTOutputapplicantCifas $cifas): static
    {
        $new = clone $this;
        $new->cifas = $cifas;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantRtr
     */
    public function getRtr(): ?\PaymentAssist\Type\CTOutputapplicantRtr
    {
        return $this->rtr;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantRtr $rtr
     * @return static
     */
    public function withRtr(?\PaymentAssist\Type\CTOutputapplicantRtr $rtr): static
    {
        $new = clone $this;
        $new->rtr = $rtr;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputapplicantAccs
     */
    public function getAccs(): ?\PaymentAssist\Type\CTOutputapplicantAccs
    {
        return $this->accs;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputapplicantAccs $accs
     * @return static
     */
    public function withAccs(?\PaymentAssist\Type\CTOutputapplicantAccs $accs): static
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
}

