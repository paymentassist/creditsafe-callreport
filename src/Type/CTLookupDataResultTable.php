<?php

namespace PaymentAssist\Type;

class CTLookupDataResultTable
{
    /**
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\CTLookupDataResultRow>
     */
    private array $row;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $desc;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\CTLookupDataResultRow>
     */
    public function getRow(): array
    {
        return $this->row;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\CTLookupDataResultRow> $row
     * @return static
     */
    public function withRow(array $row): static
    {
        $new = clone $this;
        $new->row = $row;

        return $new;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return static
     */
    public function withId(string $id): static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getDesc(): string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     * @return static
     */
    public function withDesc(string $desc): static
    {
        $new = clone $this;
        $new->desc = $desc;

        return $new;
    }
}

