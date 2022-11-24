<?php

namespace ContainerRfHNRbz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStoryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\StoryController' shared autowired service.
     *
     * @return \App\Controller\Api\StoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/StoryController.php';

        $container->services['App\\Controller\\Api\\StoryController'] = $instance = new \App\Controller\Api\StoryController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Api\\StoryController', $container));

        return $instance;
    }
}
