<?php

namespace PaymentAssist\Type;

class CTCreditreport
{

    /**
     * @var \PaymentAssist\Type\Applicant
     */
    private $applicant;

    /**
     * @var string
     */
    private $searchid;

    /**
     * @var int
     */
    private $linktype;

    /**
     * @return \PaymentAssist\Type\Applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * @param \PaymentAssist\Type\Applicant $applicant
     * @return CTCreditreport
     */
    public function withApplicant($applicant)
    {
        $new = clone $this;
        $new->applicant = $applicant;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchid()
    {
        return $this->searchid;
    }

    /**
     * @param string $searchid
     * @return CTCreditreport
     */
    public function withSearchid($searchid)
    {
        $new = clone $this;
        $new->searchid = $searchid;

        return $new;
    }

    /**
     * @return int
     */
    public function getLinktype()
    {
        return $this->linktype;
    }

    /**
     * @param int $linktype
     * @return CTCreditreport
     */
    public function withLinktype($linktype)
    {
        $new = clone $this;
        $new->linktype = $linktype;

        return $new;
    }


}

