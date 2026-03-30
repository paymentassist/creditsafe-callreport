<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ChangePassword07aResponse implements ResultInterface
{
    /**
     * 1 indicates a successful change, 0 indicates failure
     *
     * @var bool
     */
    private bool $pwdchanged;

    /**
     * @return bool
     */
    public function getPwdchanged(): bool
    {
        return $this->pwdchanged;
    }

    /**
     * @param bool $pwdchanged
     * @return static
     */
    public function withPwdchanged(bool $pwdchanged): static
    {
        $new = clone $this;
        $new->pwdchanged = $pwdchanged;

        return $new;
    }
}

