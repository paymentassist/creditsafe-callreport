<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangePassword07a implements RequestInterface
{
    /**
     * User's new password
     *
     * @var string
     */
    private string $newpwd;

    /**
     * If this optional element is provided then a check is carried out to ensure that this matches the new password element. Facilitates a commonly used front end.
     *
     * @var null | string
     */
    private ?string $confirmpwd = null;

    /**
     * Constructor
     *
     * @param string $newpwd
     * @param null | string $confirmpwd
     */
    public function __construct(string $newpwd, ?string $confirmpwd)
    {
        $this->newpwd = $newpwd;
        $this->confirmpwd = $confirmpwd;
    }

    /**
     * @return string
     */
    public function getNewpwd() : string
    {
        return $this->newpwd;
    }

    /**
     * @param string $newpwd
     * @return static
     */
    public function withNewpwd(string $newpwd) : static
    {
        $new = clone $this;
        $new->newpwd = $newpwd;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getConfirmpwd() : ?string
    {
        return $this->confirmpwd;
    }

    /**
     * @param null | string $confirmpwd
     * @return static
     */
    public function withConfirmpwd(?string $confirmpwd) : static
    {
        $new = clone $this;
        $new->confirmpwd = $confirmpwd;

        return $new;
    }
}

