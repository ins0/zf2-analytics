<?php

use Racecore\GATracking\GATracking;
use Zf2Analytics\Factory;

return [
    'service_manager' => [
        'factories' => [
            GATracking::class => Factory\AnalyticsClientFactory::class,
        ],
        'shared' => [
            GATracking::class => false,
        ],
    ],
];