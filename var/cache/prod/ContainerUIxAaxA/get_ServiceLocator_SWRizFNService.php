<?php

namespace ContainerUIxAaxA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SWRizFNService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.SWRizFN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SWRizFN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'storyRepository' => ['privates', 'App\\Repository\\StoryRepository', 'getStoryRepositoryService', true],
        ], [
            'paginator' => '?',
            'storyRepository' => 'App\\Repository\\StoryRepository',
        ]);
    }
}
