<?php

namespace PaymentAssist\Type;

class CTSummaryresidency
{

    /**
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private $_;

    /**
     * @var int
     */
    private $messagecode;

    /**
     * @var int
     */
    private $id;

    /**
     * @return \PaymentAssist\Type\CTOutputaddress
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddress $_
     * @return CTSummaryresidency
     */
    public function with_($_)
    {
        $new = clone $this;
        $new->_ = $_;

        return $new;
    }

    /**
     * @return int
     */
    public function getMessagecode()
    {
        return $this->messagecode;
    }

    /**
     * @param int $messagecode
     * @return CTSummaryresidency
     */
    public function withMessagecode($messagecode)
    {
        $new = clone $this;
        $new->messagecode = $messagecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CTSummaryresidency
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }


}

