<?php

use Pimcore\Bundle\GenericDataIndexBundle\PimcoreGenericDataIndexBundle;
use Pimcore\Bundle\GenericExecutionEngineBundle\PimcoreGenericExecutionEngineBundle;
use Pimcore\Bundle\OpenSearchClientBundle\PimcoreOpenSearchClientBundle;
use Pimcore\Bundle\SimpleBackendSearchBundle\PimcoreSimpleBackendSearchBundle;
use Pimcore\Bundle\StaticRoutesBundle\PimcoreStaticRoutesBundle;
use Pimcore\Bundle\StudioBackendBundle\PimcoreStudioBackendBundle;
use Pimcore\Bundle\StudioUiBundle\PimcoreStudioUiBundle;

return [
    PimcoreGenericDataIndexBundle::class => ['all' => true],
    PimcoreGenericExecutionEngineBundle::class => ['all' => true],
    PimcoreOpenSearchClientBundle::class => ['all' => true],
    PimcoreSimpleBackendSearchBundle::class => ['all' => true],
    PimcoreStaticRoutesBundle::class => ['all' => true],
    PimcoreStudioBackendBundle::class => ['all' => true],
    PimcoreStudioUiBundle::class => ['all' => true],
];
