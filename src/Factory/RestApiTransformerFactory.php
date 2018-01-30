<?php

namespace PhpBenchmarksZendFramework\RestApiModule\Factory;

use Interop\Container\ContainerInterface;
use PhpBenchmarksZendFramework\RestApiModule\Transformer\RestApiTransformer;

final class RestApiTransformerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new RestApiTransformer($container->get('MvcTranslator'));
    }
}
