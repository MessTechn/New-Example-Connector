<?php

namespace Jtl\Connector\Example\Authentication;

use Jtl\Connector\Core\Authentication\TokenValidatorInterface;

class TokenValidator implements TokenValidatorInterface
{
    protected $checkToken;
    
    public function __construct(string $checkToken)
    {
        $this->checkToken = $checkToken;
    }
    
    /**
     * @inheritDoc
     */
    public function validate(string $token) : bool
    {
        $checkToken = $GLOBALS["application"]->getConfig()->get("token");

        return $token === $checkToken;
    }
}