<?php

namespace PaymentAssist\Type;

class Contact
{
    /**
     * Set of email contact details
     *
     * @var array<int<0,2>, \PaymentAssist\Type\CTDemographicsemail>
     */
    private array $email;

    /**
     * Set of telephone contact details
     *
     * @var array<int<0,3>, \PaymentAssist\Type\CTDemographicstelephone>
     */
    private array $telephone;

    /**
     * @return array<int<0,2>, \PaymentAssist\Type\CTDemographicsemail>
     */
    public function getEmail() : array
    {
        return $this->email;
    }

    /**
     * @param array<int<0,2>, \PaymentAssist\Type\CTDemographicsemail> $email
     * @return static
     */
    public function withEmail(array $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return array<int<0,3>, \PaymentAssist\Type\CTDemographicstelephone>
     */
    public function getTelephone() : array
    {
        return $this->telephone;
    }

    /**
     * @param array<int<0,3>, \PaymentAssist\Type\CTDemographicstelephone> $telephone
     * @return static
     */
    public function withTelephone(array $telephone) : static
    {
        $new = clone $this;
        $new->telephone = $telephone;

        return $new;
    }
}

