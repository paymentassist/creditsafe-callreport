<?php

namespace PaymentAssist\Type;

class CTOutputcifascase
{

    /**
     * @var int
     */
    private $caseid;

    /**
     * @var \PaymentAssist\Type\CTOutputcifascasedata
     */
    private $details;

    /**
     * @var \PaymentAssist\Type\Dmrs
     */
    private $dmrs;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @return int
     */
    public function getCaseid()
    {
        return $this->caseid;
    }

    /**
     * @param int $caseid
     * @return CTOutputcifascase
     */
    public function withCaseid($caseid)
    {
        $new = clone $this;
        $new->caseid = $caseid;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputcifascasedata
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputcifascasedata $details
     * @return CTOutputcifascase
     */
    public function withDetails($details)
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Dmrs
     */
    public function getDmrs()
    {
        return $this->dmrs;
    }

    /**
     * @param \PaymentAssist\Type\Dmrs $dmrs
     * @return CTOutputcifascase
     */
    public function withDmrs($dmrs)
    {
        $new = clone $this;
        $new->dmrs = $dmrs;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputnotice
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputnotice $notice
     * @return CTOutputcifascase
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }


}

