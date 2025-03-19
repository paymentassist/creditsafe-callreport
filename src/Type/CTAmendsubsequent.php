<?php

namespace PaymentAssist\Type;

class CTAmendsubsequent
{
    /**
     * Original report search id
     *
     * @var string
     */
    private string $origsrchid;

    /**
     * Amended subsequent search amendments
     *
     * @var null | \PaymentAssist\Type\Amendments
     */
    private ?\PaymentAssist\Type\Amendments $amendments = null;

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
     * @return string
     */
    public function getOrigsrchid() : string
    {
        return $this->origsrchid;
    }

    /**
     * @param string $origsrchid
     * @return static
     */
    public function withOrigsrchid(string $origsrchid) : static
    {
        $new = clone $this;
        $new->origsrchid = $origsrchid;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Amendments
     */
    public function getAmendments() : ?\PaymentAssist\Type\Amendments
    {
        return $this->amendments;
    }

    /**
     * @param null | \PaymentAssist\Type\Amendments $amendments
     * @return static
     */
    public function withAmendments(?\PaymentAssist\Type\Amendments $amendments) : static
    {
        $new = clone $this;
        $new->amendments = $amendments;

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

