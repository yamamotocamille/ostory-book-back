<?php

namespace ContainerRfHNRbz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VAHte34Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VAHte34' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VAHte34'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'choiceRepository' => ['privates', 'App\\Repository\\ChoiceRepository', 'getChoiceRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'storyRepository' => ['privates', 'App\\Repository\\StoryRepository', 'getStoryRepositoryService', true],
        ], [
            'choiceRepository' => 'App\\Repository\\ChoiceRepository',
            'paginator' => '?',
            'storyRepository' => 'App\\Repository\\StoryRepository',
        ]);
    }
}
