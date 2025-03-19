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
     * @var null | \PaymentAssist\Type\Creditscores
     */
    private ?\PaymentAssist\Type\Creditscores $creditscores = null;

    /**
     * Address Confirmation data-set
     *
     * @var null | \PaymentAssist\Type\Addressconfs
     */
    private ?\PaymentAssist\Type\Addressconfs $addressconfs = null;

    /**
     * Judgment data-set
     *
     * @var null | \PaymentAssist\Type\Judgments
     */
    private ?\PaymentAssist\Type\Judgments $judgments = null;

    /**
     * Insolvency data-set
     *
     * @var null | \PaymentAssist\Type\Bais
     */
    private ?\PaymentAssist\Type\Bais $bais = null;

    /**
     * Notice of Correction data-set
     *
     * @var null | \PaymentAssist\Type\Nocs
     */
    private ?\PaymentAssist\Type\Nocs $nocs = null;

    /**
     * Search History data-set
     *
     * @var null | \PaymentAssist\Type\Searches
     */
    private ?\PaymentAssist\Type\Searches $searches = null;

    /**
     * Address Links data-set
     *
     * @var null | \PaymentAssist\Type\Addresslinks
     */
    private ?\PaymentAssist\Type\Addresslinks $addresslinks = null;

    /**
     * Alias Links data-set
     *
     * @var null | \PaymentAssist\Type\Aliaslinks
     */
    private ?\PaymentAssist\Type\Aliaslinks $aliaslinks = null;

    /**
     * Associate Links data-set
     *
     * @var null | \PaymentAssist\Type\Associatelinks
     */
    private ?\PaymentAssist\Type\Associatelinks $associatelinks = null;

    /**
     * CIFAS data-set
     *
     * @var null | \PaymentAssist\Type\Cifas
     */
    private ?\PaymentAssist\Type\Cifas $cifas = null;

    /**
     * RTR data-set
     *
     * @var null | \PaymentAssist\Type\Rtr
     */
    private ?\PaymentAssist\Type\Rtr $rtr = null;

    /**
     * SHARE data-set
     *
     * @var null | \PaymentAssist\Type\Accs
     */
    private ?\PaymentAssist\Type\Accs $accs = null;

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
    public function getSummary() : ?\PaymentAssist\Type\CTOutputsummaryblock
    {
        return $this->summary;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputsummaryblock $summary
     * @return static
     */
    public function withSummary(?\PaymentAssist\Type\CTOutputsummaryblock $summary) : static
    {
        $new = clone $this;
        $new->summary = $summary;

        return $new;
    }

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
     * @return null | \PaymentAssist\Type\Addressconfs
     */
    public function getAddressconfs() : ?\PaymentAssist\Type\Addressconfs
    {
        return $this->addressconfs;
    }

    /**
     * @param null | \PaymentAssist\Type\Addressconfs $addressconfs
     * @return static
     */
    public function withAddressconfs(?\PaymentAssist\Type\Addressconfs $addressconfs) : static
    {
        $new = clone $this;
        $new->addressconfs = $addressconfs;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Judgments
     */
    public function getJudgments() : ?\PaymentAssist\Type\Judgments
    {
        return $this->judgments;
    }

    /**
     * @param null | \PaymentAssist\Type\Judgments $judgments
     * @return static
     */
    public function withJudgments(?\PaymentAssist\Type\Judgments $judgments) : static
    {
        $new = clone $this;
        $new->judgments = $judgments;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Bais
     */
    public function getBais() : ?\PaymentAssist\Type\Bais
    {
        return $this->bais;
    }

    /**
     * @param null | \PaymentAssist\Type\Bais $bais
     * @return static
     */
    public function withBais(?\PaymentAssist\Type\Bais $bais) : static
    {
        $new = clone $this;
        $new->bais = $bais;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Nocs
     */
    public function getNocs() : ?\PaymentAssist\Type\Nocs
    {
        return $this->nocs;
    }

    /**
     * @param null | \PaymentAssist\Type\Nocs $nocs
     * @return static
     */
    public function withNocs(?\PaymentAssist\Type\Nocs $nocs) : static
    {
        $new = clone $this;
        $new->nocs = $nocs;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Searches
     */
    public function getSearches() : ?\PaymentAssist\Type\Searches
    {
        return $this->searches;
    }

    /**
     * @param null | \PaymentAssist\Type\Searches $searches
     * @return static
     */
    public function withSearches(?\PaymentAssist\Type\Searches $searches) : static
    {
        $new = clone $this;
        $new->searches = $searches;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Addresslinks
     */
    public function getAddresslinks() : ?\PaymentAssist\Type\Addresslinks
    {
        return $this->addresslinks;
    }

    /**
     * @param null | \PaymentAssist\Type\Addresslinks $addresslinks
     * @return static
     */
    public function withAddresslinks(?\PaymentAssist\Type\Addresslinks $addresslinks) : static
    {
        $new = clone $this;
        $new->addresslinks = $addresslinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Aliaslinks
     */
    public function getAliaslinks() : ?\PaymentAssist\Type\Aliaslinks
    {
        return $this->aliaslinks;
    }

    /**
     * @param null | \PaymentAssist\Type\Aliaslinks $aliaslinks
     * @return static
     */
    public function withAliaslinks(?\PaymentAssist\Type\Aliaslinks $aliaslinks) : static
    {
        $new = clone $this;
        $new->aliaslinks = $aliaslinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Associatelinks
     */
    public function getAssociatelinks() : ?\PaymentAssist\Type\Associatelinks
    {
        return $this->associatelinks;
    }

    /**
     * @param null | \PaymentAssist\Type\Associatelinks $associatelinks
     * @return static
     */
    public function withAssociatelinks(?\PaymentAssist\Type\Associatelinks $associatelinks) : static
    {
        $new = clone $this;
        $new->associatelinks = $associatelinks;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Cifas
     */
    public function getCifas() : ?\PaymentAssist\Type\Cifas
    {
        return $this->cifas;
    }

    /**
     * @param null | \PaymentAssist\Type\Cifas $cifas
     * @return static
     */
    public function withCifas(?\PaymentAssist\Type\Cifas $cifas) : static
    {
        $new = clone $this;
        $new->cifas = $cifas;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Rtr
     */
    public function getRtr() : ?\PaymentAssist\Type\Rtr
    {
        return $this->rtr;
    }

    /**
     * @param null | \PaymentAssist\Type\Rtr $rtr
     * @return static
     */
    public function withRtr(?\PaymentAssist\Type\Rtr $rtr) : static
    {
        $new = clone $this;
        $new->rtr = $rtr;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Accs
     */
    public function getAccs() : ?\PaymentAssist\Type\Accs
    {
        return $this->accs;
    }

    /**
     * @param null | \PaymentAssist\Type\Accs $accs
     * @return static
     */
    public function withAccs(?\PaymentAssist\Type\Accs $accs) : static
    {
        $new = clone $this;
        $new->accs = $accs;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics
     */
    public function getDemographics() : ?\PaymentAssist\Type\CTOutputdemographics
    {
        return $this->demographics;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics $demographics
     * @return static
     */
    public function withDemographics(?\PaymentAssist\Type\CTOutputdemographics $demographics) : static
    {
        $new = clone $this;
        $new->demographics = $demographics;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006
     */
    public function getDemographics2006() : ?\PaymentAssist\Type\CTOutputdemographics2006
    {
        return $this->demographics2006;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006 $demographics2006
     * @return static
     */
    public function withDemographics2006(?\PaymentAssist\Type\CTOutputdemographics2006 $demographics2006) : static
    {
        $new = clone $this;
        $new->demographics2006 = $demographics2006;

        return $new;
    }

    /**
     * @return string
     */
    public function getReporttype() : string
    {
        return $this->reporttype;
    }

    /**
     * @param string $reporttype
     * @return static
     */
    public function withReporttype(string $reporttype) : static
    {
        $new = clone $this;
        $new->reporttype = $reporttype;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTpoptout() : ?int
    {
        return $this->tpoptout;
    }

    /**
     * @param null | int $tpoptout
     * @return static
     */
    public function withTpoptout(?int $tpoptout) : static
    {
        $new = clone $this;
        $new->tpoptout = $tpoptout;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAutosearchmaxexceeded() : ?int
    {
        return $this->autosearchmaxexceeded;
    }

    /**
     * @param null | int $autosearchmaxexceeded
     * @return static
     */
    public function withAutosearchmaxexceeded(?int $autosearchmaxexceeded) : static
    {
        $new = clone $this;
        $new->autosearchmaxexceeded = $autosearchmaxexceeded;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAgeflag() : ?int
    {
        return $this->ageflag;
    }

    /**
     * @param null | int $ageflag
     * @return static
     */
    public function withAgeflag(?int $ageflag) : static
    {
        $new = clone $this;
        $new->ageflag = $ageflag;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReporttitle() : ?string
    {
        return $this->reporttitle;
    }

    /**
     * @param null | string $reporttitle
     * @return static
     */
    public function withReporttitle(?string $reporttitle) : static
    {
        $new = clone $this;
        $new->reporttitle = $reporttitle;

        return $new;
    }
}

