<?php

namespace FluxIliasBaseApi\Adapter\User;

enum UserAuthenticationMode: string
{

    case CAS = "cas";
    case DEFAULT = "default";
    case LDAP = "ldap";
    case LOCAL = "local";
    case OPENID = "openid";
    case RADIUS = "radius";
    case SAML = "saml";
    case SCRIPT = "script";
    case SHIBBOLETH = "shibboleth";
    case SOAP = "soap";
}
