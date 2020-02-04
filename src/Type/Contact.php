<?php

namespace PaymentAssist\Type;

class Contact
{

    /**
     * @var \PaymentAssist\Type\CTDemographicsemail
     */
    private $email;

    /**
     * @var \PaymentAssist\Type\CTDemographicstelephone
     */
    private $telephone;

    /**
     * @return \PaymentAssist\Type\CTDemographicsemail
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsemail $email
     * @return Contact
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTDemographicstelephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicstelephone $telephone
     * @return Contact
     */
    public function withTelephone($telephone)
    {
        $new = clone $this;
        $new->telephone = $telephone;

        return $new;
    }


}

