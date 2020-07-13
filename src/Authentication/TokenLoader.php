<?php

namespace Jtl\Connector\Example\Authentication;

use Jtl\Connector\Core\Authentication\TokenValidatorInterface;

class TokenLoader implements TokenValidatorInterface
{
    
    /**
     * @inheritDoc
     */
    public function validate(string $token) : bool
    {
        return true;
    }
}