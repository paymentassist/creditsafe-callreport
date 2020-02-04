<?php

namespace PaymentAssist\Type;

class CTOutputapplicant
{

    /**
     * @var \PaymentAssist\Type\CTOutputsummaryblock
     */
    private $summary;

    /**
     * @var \PaymentAssist\Type\Creditscores
     */
    private $creditscores;

    /**
     * @var \PaymentAssist\Type\Addressconfs
     */
    private $addressconfs;

    /**
     * @var \PaymentAssist\Type\Judgments
     */
    private $judgments;

    /**
     * @var \PaymentAssist\Type\Bais
     */
    private $bais;

    /**
     * @var \PaymentAssist\Type\Nocs
     */
    private $nocs;

    /**
     * @var \PaymentAssist\Type\Searches
     */
    private $searches;

    /**
     * @var \PaymentAssist\Type\Addresslinks
     */
    private $addresslinks;

    /**
     * @var \PaymentAssist\Type\Aliaslinks
     */
    private $aliaslinks;

    /**
     * @var \PaymentAssist\Type\Associatelinks
     */
    private $associatelinks;

    /**
     * @var \PaymentAssist\Type\Cifas
     */
    private $cifas;

    /**
     * @var \PaymentAssist\Type\Rtr
     */
    private $rtr;

    /**
     * @var \PaymentAssist\Type\Accs
     */
    private $accs;

    /**
     * @var \PaymentAssist\Type\CTOutputdemographics
     */
    private $demographics;

    /**
     * @var \PaymentAssist\Type\CTOutputdemographics2006
     */
    private $demographics2006;

    /**
     * @var string
     */
    private $reporttype;

    /**
     * @var int
     */
    private $tpoptout;

    /**
     * @var int
     */
    private $autosearchmaxexceeded;

    /**
     * @var int
     */
    private $ageflag;

    /**
     * @var string
     */
    private $reporttitle;

    /**
     * @return \PaymentAssist\Type\CTOutputsummaryblock
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputsummaryblock $summary
     * @return CTOutputapplicant
     */
    public function withSummary($summary)
    {
        $new = clone $this;
        $new->summary = $summary;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Creditscores
     */
    public function getCreditscores()
    {
        return $this->creditscores;
    }

    /**
     * @param \PaymentAssist\Type\Creditscores $creditscores
     * @return CTOutputapplicant
     */
    public function withCreditscores($creditscores)
    {
        $new = clone $this;
        $new->creditscores = $creditscores;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Addressconfs
     */
    public function getAddressconfs()
    {
        return $this->addressconfs;
    }

    /**
     * @param \PaymentAssist\Type\Addressconfs $addressconfs
     * @return CTOutputapplicant
     */
    public function withAddressconfs($addressconfs)
    {
        $new = clone $this;
        $new->addressconfs = $addressconfs;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Judgments
     */
    public function getJudgments()
    {
        return $this->judgments;
    }

    /**
     * @param \PaymentAssist\Type\Judgments $judgments
     * @return CTOutputapplicant
     */
    public function withJudgments($judgments)
    {
        $new = clone $this;
        $new->judgments = $judgments;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Bais
     */
    public function getBais()
    {
        return $this->bais;
    }

    /**
     * @param \PaymentAssist\Type\Bais $bais
     * @return CTOutputapplicant
     */
    public function withBais($bais)
    {
        $new = clone $this;
        $new->bais = $bais;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Nocs
     */
    public function getNocs()
    {
        return $this->nocs;
    }

    /**
     * @param \PaymentAssist\Type\Nocs $nocs
     * @return CTOutputapplicant
     */
    public function withNocs($nocs)
    {
        $new = clone $this;
        $new->nocs = $nocs;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Searches
     */
    public function getSearches()
    {
        return $this->searches;
    }

    /**
     * @param \PaymentAssist\Type\Searches $searches
     * @return CTOutputapplicant
     */
    public function withSearches($searches)
    {
        $new = clone $this;
        $new->searches = $searches;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Addresslinks
     */
    public function getAddresslinks()
    {
        return $this->addresslinks;
    }

    /**
     * @param \PaymentAssist\Type\Addresslinks $addresslinks
     * @return CTOutputapplicant
     */
    public function withAddresslinks($addresslinks)
    {
        $new = clone $this;
        $new->addresslinks = $addresslinks;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Aliaslinks
     */
    public function getAliaslinks()
    {
        return $this->aliaslinks;
    }

    /**
     * @param \PaymentAssist\Type\Aliaslinks $aliaslinks
     * @return CTOutputapplicant
     */
    public function withAliaslinks($aliaslinks)
    {
        $new = clone $this;
        $new->aliaslinks = $aliaslinks;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Associatelinks
     */
    public function getAssociatelinks()
    {
        return $this->associatelinks;
    }

    /**
     * @param \PaymentAssist\Type\Associatelinks $associatelinks
     * @return CTOutputapplicant
     */
    public function withAssociatelinks($associatelinks)
    {
        $new = clone $this;
        $new->associatelinks = $associatelinks;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Cifas
     */
    public function getCifas()
    {
        return $this->cifas;
    }

    /**
     * @param \PaymentAssist\Type\Cifas $cifas
     * @return CTOutputapplicant
     */
    public function withCifas($cifas)
    {
        $new = clone $this;
        $new->cifas = $cifas;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Rtr
     */
    public function getRtr()
    {
        return $this->rtr;
    }

    /**
     * @param \PaymentAssist\Type\Rtr $rtr
     * @return CTOutputapplicant
     */
    public function withRtr($rtr)
    {
        $new = clone $this;
        $new->rtr = $rtr;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Accs
     */
    public function getAccs()
    {
        return $this->accs;
    }

    /**
     * @param \PaymentAssist\Type\Accs $accs
     * @return CTOutputapplicant
     */
    public function withAccs($accs)
    {
        $new = clone $this;
        $new->accs = $accs;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputdemographics
     */
    public function getDemographics()
    {
        return $this->demographics;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputdemographics $demographics
     * @return CTOutputapplicant
     */
    public function withDemographics($demographics)
    {
        $new = clone $this;
        $new->demographics = $demographics;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputdemographics2006
     */
    public function getDemographics2006()
    {
        return $this->demographics2006;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputdemographics2006 $demographics2006
     * @return CTOutputapplicant
     */
    public function withDemographics2006($demographics2006)
    {
        $new = clone $this;
        $new->demographics2006 = $demographics2006;

        return $new;
    }

    /**
     * @return string
     */
    public function getReporttype()
    {
        return $this->reporttype;
    }

    /**
     * @param string $reporttype
     * @return CTOutputapplicant
     */
    public function withReporttype($reporttype)
    {
        $new = clone $this;
        $new->reporttype = $reporttype;

        return $new;
    }

    /**
     * @return int
     */
    public function getTpoptout()
    {
        return $this->tpoptout;
    }

    /**
     * @param int $tpoptout
     * @return CTOutputapplicant
     */
    public function withTpoptout($tpoptout)
    {
        $new = clone $this;
        $new->tpoptout = $tpoptout;

        return $new;
    }

    /**
     * @return int
     */
    public function getAutosearchmaxexceeded()
    {
        return $this->autosearchmaxexceeded;
    }

    /**
     * @param int $autosearchmaxexceeded
     * @return CTOutputapplicant
     */
    public function withAutosearchmaxexceeded($autosearchmaxexceeded)
    {
        $new = clone $this;
        $new->autosearchmaxexceeded = $autosearchmaxexceeded;

        return $new;
    }

    /**
     * @return int
     */
    public function getAgeflag()
    {
        return $this->ageflag;
    }

    /**
     * @param int $ageflag
     * @return CTOutputapplicant
     */
    public function withAgeflag($ageflag)
    {
        $new = clone $this;
        $new->ageflag = $ageflag;

        return $new;
    }

    /**
     * @return string
     */
    public function getReporttitle()
    {
        return $this->reporttitle;
    }

    /**
     * @param string $reporttitle
     * @return CTOutputapplicant
     */
    public function withReporttitle($reporttitle)
    {
        $new = clone $this;
        $new->reporttitle = $reporttitle;

        return $new;
    }


}

