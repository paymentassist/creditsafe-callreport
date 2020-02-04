<?php

namespace PaymentAssist\Type;

class Searches
{

    /**
     * @var \PaymentAssist\Type\CTOutputsearchhistory
     */
    private $search;

    /**
     * @return \PaymentAssist\Type\CTOutputsearchhistory
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputsearchhistory $search
     * @return Searches
     */
    public function withSearch($search)
    {
        $new = clone $this;
        $new->search = $search;

        return $new;
    }


}

