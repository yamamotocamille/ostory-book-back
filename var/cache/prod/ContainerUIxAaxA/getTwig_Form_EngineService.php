<?php

namespace ContainerUIxAaxA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Form_EngineService extends App_KernelProdContainer
{
    /*
     * Gets the private 'twig.form.engine' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRendererEngine
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['twig.form.engine'] = new \Symfony\Bridge\Twig\Form\TwigRendererEngine($container->parameters['twig.form.resources'], ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')));
    }
}
