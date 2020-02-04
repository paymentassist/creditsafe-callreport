<?php

namespace PaymentAssist\Type;

class CTLookupDataResult
{

    /**
     * @var \PaymentAssist\Type\Table
     */
    private $table;

    /**
     * @var string
     */
    private $version;

    /**
     * @return \PaymentAssist\Type\Table
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param \PaymentAssist\Type\Table $table
     * @return CTLookupDataResult
     */
    public function withTable($table)
    {
        $new = clone $this;
        $new->table = $table;

        return $new;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return CTLookupDataResult
     */
    public function withVersion($version)
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }


}

