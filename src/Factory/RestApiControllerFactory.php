<?php

namespace PhpBenchmarksZendFramework\RestApiModule\Factory;

use Interop\Container\ContainerInterface;
use PhpBenchmarksZendFramework\RestApiModule\Controller\RestApiController;

final class RestApiControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new RestApiController($container->get('MvcTranslator'), $container->get('RestApiTransformer'));
    }
}
