<?php

namespace PaymentAssist\Type;

class CTAmendsubsequent
{

    /**
     * @var string
     */
    private $origsrchid;

    /**
     * @var \PaymentAssist\Type\Amendments
     */
    private $amendments;

    /**
     * @var string
     */
    private $schemaversion;

    /**
     * @var int
     */
    private $datasets;

    /**
     * @return string
     */
    public function getOrigsrchid()
    {
        return $this->origsrchid;
    }

    /**
     * @param string $origsrchid
     * @return CTAmendsubsequent
     */
    public function withOrigsrchid($origsrchid)
    {
        $new = clone $this;
        $new->origsrchid = $origsrchid;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Amendments
     */
    public function getAmendments()
    {
        return $this->amendments;
    }

    /**
     * @param \PaymentAssist\Type\Amendments $amendments
     * @return CTAmendsubsequent
     */
    public function withAmendments($amendments)
    {
        $new = clone $this;
        $new->amendments = $amendments;

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
     * @return CTAmendsubsequent
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
     * @return CTAmendsubsequent
     */
    public function withDatasets($datasets)
    {
        $new = clone $this;
        $new->datasets = $datasets;

        return $new;
    }


}

