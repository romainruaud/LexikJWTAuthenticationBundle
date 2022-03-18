<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;

/**
 * @internal
 */
trait ForwardCompatAuthenticatorTrait
{
    public function authenticate(Request $request): Passport
    {
        return $this->doAuthenticate($request);
    }
}
