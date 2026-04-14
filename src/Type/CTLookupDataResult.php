<?php

namespace PaymentAssist\Type;

class CTLookupDataResult
{
    /**
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\CTLookupDataResultTable>
     */
    private array $table;

    /**
     * @var string
     */
    private string $version;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\CTLookupDataResultTable>
     */
    public function getTable(): array
    {
        return $this->table;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\CTLookupDataResultTable> $table
     * @return static
     */
    public function withTable(array $table): static
    {
        $new = clone $this;
        $new->table = $table;

        return $new;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return static
     */
    public function withVersion(string $version): static
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }
}

