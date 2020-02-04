<?php

namespace PaymentAssist\Type;

class CTSearchrequest
{

    /**
     * @var \PaymentAssist\Type\CTSearchapplicant
     */
    private $applicant;

    /**
     * @var int
     */
    private $score;

    /**
     * @var string
     */
    private $purpose;

    /**
     * @var string
     */
    private $credittype;

    /**
     * @var int
     */
    private $balorlim;

    /**
     * @var string
     */
    private $term;

    /**
     * @var int
     */
    private $transient;

    /**
     * @var int
     */
    private $autosearch;

    /**
     * @var int
     */
    private $autosearchmaximum;

    /**
     * @var string
     */
    private $schemaversion;

    /**
     * @var int
     */
    private $datasets;

    /**
     * @return \PaymentAssist\Type\CTSearchapplicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * @param \PaymentAssist\Type\CTSearchapplicant $applicant
     * @return CTSearchrequest
     */
    public function withApplicant($applicant)
    {
        $new = clone $this;
        $new->applicant = $applicant;

        return $new;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return CTSearchrequest
     */
    public function withScore($score)
    {
        $new = clone $this;
        $new->score = $score;

        return $new;
    }

    /**
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param string $purpose
     * @return CTSearchrequest
     */
    public function withPurpose($purpose)
    {
        $new = clone $this;
        $new->purpose = $purpose;

        return $new;
    }

    /**
     * @return string
     */
    public function getCredittype()
    {
        return $this->credittype;
    }

    /**
     * @param string $credittype
     * @return CTSearchrequest
     */
    public function withCredittype($credittype)
    {
        $new = clone $this;
        $new->credittype = $credittype;

        return $new;
    }

    /**
     * @return int
     */
    public function getBalorlim()
    {
        return $this->balorlim;
    }

    /**
     * @param int $balorlim
     * @return CTSearchrequest
     */
    public function withBalorlim($balorlim)
    {
        $new = clone $this;
        $new->balorlim = $balorlim;

        return $new;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     * @return CTSearchrequest
     */
    public function withTerm($term)
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return int
     */
    public function getTransient()
    {
        return $this->transient;
    }

    /**
     * @param int $transient
     * @return CTSearchrequest
     */
    public function withTransient($transient)
    {
        $new = clone $this;
        $new->transient = $transient;

        return $new;
    }

    /**
     * @return int
     */
    public function getAutosearch()
    {
        return $this->autosearch;
    }

    /**
     * @param int $autosearch
     * @return CTSearchrequest
     */
    public function withAutosearch($autosearch)
    {
        $new = clone $this;
        $new->autosearch = $autosearch;

        return $new;
    }

    /**
     * @return int
     */
    public function getAutosearchmaximum()
    {
        return $this->autosearchmaximum;
    }

    /**
     * @param int $autosearchmaximum
     * @return CTSearchrequest
     */
    public function withAutosearchmaximum($autosearchmaximum)
    {
        $new = clone $this;
        $new->autosearchmaximum = $autosearchmaximum;

        return $new;
    }

    /**
     * @return string
     */
    public function getSchemaversion()
    {
        return $this->schemaversion;
    }

    /**
     * @param string $schemaversion
     * @return CTSearchrequest
     */
    public function withSchemaversion($schemaversion)
    {
        $new = clone $this;
        $new->schemaversion = $schemaversion;

        return $new;
    }

    /**
     * @return int
     */
    public function getDatasets()
    {
        return $this->datasets;
    }

    /**
     * @param int $datasets
     * @return CTSearchrequest
     */
    public function withDatasets($datasets)
    {
        $new = clone $this;
        $new->datasets = $datasets;

        return $new;
    }


}

