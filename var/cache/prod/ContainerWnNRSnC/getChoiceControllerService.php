<?php

namespace ContainerWnNRSnC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChoiceControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ChoiceController' shared autowired service.
     *
     * @return \App\Controller\ChoiceController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ChoiceController'] = $instance = new \App\Controller\ChoiceController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ChoiceController', $container));

        return $instance;
    }
}
