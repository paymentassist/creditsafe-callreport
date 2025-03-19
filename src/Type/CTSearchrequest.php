<?php

namespace PaymentAssist\Type;

class CTSearchrequest
{
    /**
     * Applicant details structure
     *
     * @var non-empty-array<int<0,1>, \PaymentAssist\Type\CTSearchapplicant>
     */
    private array $applicant;

    /**
     * A value of 1 indicates that a score has been requested
     *
     * @var null | int
     */
    private ?int $score = null;

    /**
     * Credit request search purpose
     * The list of possible values can be obtained from the web method LookupData07a table id = searchpurpose
     *
     * @var string
     */
    private string $purpose;

    /**
     * Credit type
     * The list of possible values can be obtained from the web method LookupData07a table id = credittype
     *
     * @var null | string
     */
    private ?string $credittype = null;

    /**
     * Balance or credit limit applied for
     *
     * @var null | int
     */
    private ?int $balorlim = null;

    /**
     * Term of loan applied for
     *
     * @var null | mixed
     */
    private mixed $term = null;

    /**
     * A value of 1 indicates that no financial association will be generated from the application (transient association)
     *
     * @var null | int
     */
    private ?int $transient = null;

    /**
     * A value of 1 indicates that auto-searching of undeclared addresses has been requested
     *
     * @var null | int
     */
    private ?int $autosearch = null;

    /**
     * The maximum number of addresses to auto-search
     *
     * @var null | int
     */
    private ?int $autosearchmaximum = null;

    /**
     * The version of the schema that is being adhered to. This should be in the form Major.Minor E.g. 7.0
     *
     * @var string
     */
    private string $schemaversion;

    /**
     * Bitmask field indicating which datasets are to be returned. NB Some datasets are required to be returned or controlled via the admin area and therefore not covered within this bitmask.
     * Bit0 - 1 indicates that the summary element will be returned.
     * Bit1 - 1 indicates that the addressconfs element will be returned.
     * Bit2 - 1 indicates that the judgments element will be returned.
     * Bit3 - 1 indicates that the bais element will be returned.
     * Bit4 - 1 indicates that the searches element will be returned.
     * Bit5 - 1 indicates that the addresslinks element will be returned.
     * Bit6 - 1 indicates that the associatelinks element will be returned.
     * Bit7 - 1 indicates that the accs element will be returned.
     * Bit8 - 1 indicates that the rtr element will be returned.
     * It is intended that in future releases this bitmask can be used to configure which elements are returned.
     *
     * @var int
     */
    private int $datasets;

    /**
     * @return non-empty-array<int<0,1>, \PaymentAssist\Type\CTSearchapplicant>
     */
    public function getApplicant() : array
    {
        return $this->applicant;
    }

    /**
     * @param non-empty-array<int<0,1>, \PaymentAssist\Type\CTSearchapplicant> $applicant
     * @return static
     */
    public function withApplicant(array $applicant) : static
    {
        $new = clone $this;
        $new->applicant = $applicant;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getScore() : ?int
    {
        return $this->score;
    }

    /**
     * @param null | int $score
     * @return static
     */
    public function withScore(?int $score) : static
    {
        $new = clone $this;
        $new->score = $score;

        return $new;
    }

    /**
     * @return string
     */
    public function getPurpose() : string
    {
        return $this->purpose;
    }

    /**
     * @param string $purpose
     * @return static
     */
    public function withPurpose(string $purpose) : static
    {
        $new = clone $this;
        $new->purpose = $purpose;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCredittype() : ?string
    {
        return $this->credittype;
    }

    /**
     * @param null | string $credittype
     * @return static
     */
    public function withCredittype(?string $credittype) : static
    {
        $new = clone $this;
        $new->credittype = $credittype;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getBalorlim() : ?int
    {
        return $this->balorlim;
    }

    /**
     * @param null | int $balorlim
     * @return static
     */
    public function withBalorlim(?int $balorlim) : static
    {
        $new = clone $this;
        $new->balorlim = $balorlim;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getTerm() : mixed
    {
        return $this->term;
    }

    /**
     * @param null | mixed $term
     * @return static
     */
    public function withTerm(mixed $term) : static
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTransient() : ?int
    {
        return $this->transient;
    }

    /**
     * @param null | int $transient
     * @return static
     */
    public function withTransient(?int $transient) : static
    {
        $new = clone $this;
        $new->transient = $transient;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAutosearch() : ?int
    {
        return $this->autosearch;
    }

    /**
     * @param null | int $autosearch
     * @return static
     */
    public function withAutosearch(?int $autosearch) : static
    {
        $new = clone $this;
        $new->autosearch = $autosearch;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAutosearchmaximum() : ?int
    {
        return $this->autosearchmaximum;
    }

    /**
     * @param null | int $autosearchmaximum
     * @return static
     */
    public function withAutosearchmaximum(?int $autosearchmaximum) : static
    {
        $new = clone $this;
        $new->autosearchmaximum = $autosearchmaximum;

        return $new;
    }

    /**
     * @return string
     */
    public function getSchemaversion() : string
    {
        return $this->schemaversion;
    }

    /**
     * @param string $schemaversion
     * @return static
     */
    public function withSchemaversion(string $schemaversion) : static
    {
        $new = clone $this;
        $new->schemaversion = $schemaversion;

        return $new;
    }

    /**
     * @return int
     */
    public function getDatasets() : int
    {
        return $this->datasets;
    }

    /**
     * @param int $datasets
     * @return static
     */
    public function withDatasets(int $datasets) : static
    {
        $new = clone $this;
        $new->datasets = $datasets;

        return $new;
    }
}

