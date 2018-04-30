<?php

namespace PhpBenchmarksZendFramework\RestApiModule;

use PhpBenchmarksZendFramework\RestApiModule\Controller\RestApiController;
use PhpBenchmarksZendFramework\RestApiModule\Factory\RestApiControllerFactory;
use PhpBenchmarksZendFramework\RestApiModule\Factory\RestApiTransformerFactory;
use PhpBenchmarksZendFramework\RestApiModule\Transformer\RestApiTransformer;
use Zend\Router\Http\Literal;

$routes = require 'routes.php';
$routes['phpbenchmarks'] = [
    'type' => Literal::class,
    'options' => [
        'route' => '/benchmark/rest',
        'defaults' => [
            'controller' => RestApiController::class,
            'action' => 'rest',
        ],
    ],
];

return [
    'controllers' => [
        'factories' => [
            RestApiController::class => RestApiControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => $routes,
    ],
    'view_manager' => [
        'strategies' => ['ViewJsonStrategy']
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'phpArray',
                'base_dir' => __DIR__ .  '/../language',
                'pattern' => '%s.php'
            ],
        ],
    ],
    'service_manager' => [
        'aliases' => ['RestApiTransformer' => RestApiTransformer::class],
        'factories' => [RestApiTransformer::class => RestApiTransformerFactory::class]
    ]
];
