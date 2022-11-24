<?php

namespace ContainerUIxAaxA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Access_RoleHierarchyVoterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(($container->privates['security.role_hierarchy'] ?? $container->getSecurity_RoleHierarchyService()));
    }
}
