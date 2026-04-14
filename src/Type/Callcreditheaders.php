<?php

namespace PaymentAssist\Type;

class Callcreditheaders
{
    /**
     * The login name of the organisation
     *
     * @var string
     */
    private string $company;

    /**
     * The user's login identity
     *
     * @var string
     */
    private string $username;

    /**
     * The user's password
     *
     * @var string
     */
    private string $password;

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return static
     */
    public function withCompany(string $company): static
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return static
     */
    public function withUsername(string $username): static
    {
        $new = clone $this;
        $new->username = $username;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return static
     */
    public function withPassword(string $password): static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }
}

