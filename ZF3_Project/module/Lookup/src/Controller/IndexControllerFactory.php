<?php

namespace Lookup\Controller;

use Zend\Http\Client;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class IndexControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return IndexController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $client = $container->get(Client::class);
        $config = $container->get('config');
        return new IndexController($client, $config);
    }
}
