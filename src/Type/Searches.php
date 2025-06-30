<?php

namespace PaymentAssist\Type;

class Searches
{
    /**
     * Output structure for a Search
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputsearchhistory>
     */
    private array $search;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputsearchhistory>
     */
    public function getSearch() : array
    {
        return $this->search;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputsearchhistory> $search
     * @return static
     */
    public function withSearch(array $search) : static
    {
        $new = clone $this;
        $new->search = $search;

        return $new;
    }
}

