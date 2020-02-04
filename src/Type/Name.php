<?php

namespace PaymentAssist\Type;

class Name
{

    /**
     * @var \PaymentAssist\Type\CTInputname
     */
    private $nameinput;

    /**
     * @var \PaymentAssist\Type\Namematches
     */
    private $namematches;

    /**
     * @var int
     */
    private $nameid;

    /**
     * @return \PaymentAssist\Type\CTInputname
     */
    public function getNameinput()
    {
        return $this->nameinput;
    }

    /**
     * @param \PaymentAssist\Type\CTInputname $nameinput
     * @return Name
     */
    public function withNameinput($nameinput)
    {
        $new = clone $this;
        $new->nameinput = $nameinput;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Namematches
     */
    public function getNamematches()
    {
        return $this->namematches;
    }

    /**
     * @param \PaymentAssist\Type\Namematches $namematches
     * @return Name
     */
    public function withNamematches($namematches)
    {
        $new = clone $this;
        $new->namematches = $namematches;

        return $new;
    }

    /**
     * @return int
     */
    public function getNameid()
    {
        return $this->nameid;
    }

    /**
     * @param int $nameid
     * @return Name
     */
    public function withNameid($nameid)
    {
        $new = clone $this;
        $new->nameid = $nameid;

        return $new;
    }


}

