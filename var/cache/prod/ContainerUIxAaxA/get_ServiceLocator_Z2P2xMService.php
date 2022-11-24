<?php

namespace ContainerUIxAaxA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z2P2xMService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator._z2P2xM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._z2P2xM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pageRepository' => ['privates', 'App\\Repository\\PageRepository', 'getPageRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'pageRepository' => 'App\\Repository\\PageRepository',
            'paginator' => '?',
        ]);
    }
}
