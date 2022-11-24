<?php

namespace ContainerUIxAaxA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordRequestRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ResetPasswordRequestRepository' shared autowired service.
     *
     * @return \App\Repository\ResetPasswordRequestRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ResetPasswordRequestRepository'] = new \App\Repository\ResetPasswordRequestRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
