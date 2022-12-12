<?php

namespace FluxIliasBaseApi;

require_once __DIR__ . "/../libs/flux-autoload-api/autoload.php";

use FluxIliasBaseApi\Libs\FluxAutoloadApi\Adapter\Autoload\Psr4Autoload;
use FluxIliasBaseApi\Libs\FluxAutoloadApi\Adapter\Checker\PhpExtChecker;
use FluxIliasBaseApi\Libs\FluxAutoloadApi\Adapter\Checker\PhpVersionChecker;

PhpVersionChecker::new(
    ">=8.2"
)
    ->checkAndDie(
        __NAMESPACE__
    );
PhpExtChecker::new(
    [
        "json"
    ]
)
    ->checkAndDie(
        __NAMESPACE__
    );

Psr4Autoload::new(
    [
        __NAMESPACE__ => __DIR__
    ]
)
    ->autoload();
