<?php

namespace ContainerWnNRSnC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_MailerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'mailer.mailer' shared service.
     *
     * @return \Symfony\Component\Mailer\Mailer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['mailer.mailer'] = new \Symfony\Component\Mailer\Mailer(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService')), ($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
