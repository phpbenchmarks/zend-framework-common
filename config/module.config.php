<?php

use PhpBenchmarksZendFramework\HelloWorldModule\Controller\HelloWorldController;
use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            HelloWorldController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'phpbenchmarks' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/benchmark/helloworld',
                    'defaults' => [
                        'controller' => HelloWorldController::class,
                        'action' => 'helloWorld',
                    ],
                ],
            ],
        ],
    ]
];
