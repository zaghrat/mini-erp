<?php

namespace ContainerEHkCkZ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventsExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'KevinPapst\AdminLTEBundle\Twig\EventsExtension' shared service.
     *
     * @return \KevinPapst\AdminLTEBundle\Twig\EventsExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/kevinpapst/adminlte-bundle/Twig/EventsExtension.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['KevinPapst\\AdminLTEBundle\\Twig\\EventsExtension'])) {
            return $container->privates['KevinPapst\\AdminLTEBundle\\Twig\\EventsExtension'];
        }

        return $container->privates['KevinPapst\\AdminLTEBundle\\Twig\\EventsExtension'] = new \KevinPapst\AdminLTEBundle\Twig\EventsExtension($a, ($container->privates['admin_lte_theme.context_helper'] ?? $container->getAdminLteTheme_ContextHelperService()));
    }
}
