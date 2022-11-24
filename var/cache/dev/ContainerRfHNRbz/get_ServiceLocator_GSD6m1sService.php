<?php

namespace ContainerRfHNRbz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GSD6m1sService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gSD6m1s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gSD6m1s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'storyRepository' => ['privates', 'App\\Repository\\StoryRepository', 'getStoryRepositoryService', true],
        ], [
            'slugger' => '?',
            'storyRepository' => 'App\\Repository\\StoryRepository',
        ]);
    }
}
