<?php

namespace PaymentAssist\Type;

class CTLinkrequest
{

    /**
     * @var string
     */
    private $origsrchid;

    /**
     * @var string
     */
    private $navlinkid;

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
     * @return CTLinkrequest
     */
    public function withOrigsrchid($origsrchid)
    {
        $new = clone $this;
        $new->origsrchid = $origsrchid;

        return $new;
    }

    /**
     * @return string
     */
    public function getNavlinkid()
    {
        return $this->navlinkid;
    }

    /**
     * @param string $navlinkid
     * @return CTLinkrequest
     */
    public function withNavlinkid($navlinkid)
    {
        $new = clone $this;
        $new->navlinkid = $navlinkid;

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
     * @return CTLinkrequest
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
     * @return CTLinkrequest
     */
    public function withDatasets($datasets)
    {
        $new = clone $this;
        $new->datasets = $datasets;

        return $new;
    }


}

