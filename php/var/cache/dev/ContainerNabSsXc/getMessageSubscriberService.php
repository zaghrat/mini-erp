<?php

namespace ContainerNabSsXc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\MessageSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\MessageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/MessageSubscriber.php';

        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\EventSubscriber\\MessageSubscriber'])) {
            return $container->privates['App\\EventSubscriber\\MessageSubscriber'];
        }

        return $container->privates['App\\EventSubscriber\\MessageSubscriber'] = new \App\EventSubscriber\MessageSubscriber($a);
    }
}
