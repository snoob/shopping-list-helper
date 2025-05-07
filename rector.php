<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withComposerBased(twig: true, doctrine: true, phpunit: true, symfony: true)
    ->withAttributesSets(symfony: true, doctrine: true, mongoDb: false, gedmo: false, phpunit: false)
    ->withPaths([__DIR__ . '/config', __DIR__ . '/public', __DIR__ . '/src', __DIR__ . '/tests'])
    ->withParallel(300)
;
