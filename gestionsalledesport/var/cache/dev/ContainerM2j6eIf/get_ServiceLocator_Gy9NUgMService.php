<?php

namespace ContainerM2j6eIf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gy9NUgMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Gy9NUgM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Gy9NUgM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cour' => ['privates', '.errored..service_locator.Gy9NUgM.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.Gy9NUgM": it references class "App\\Entity\\Cours" but no such service exists.'],
        ], [
            'cour' => 'App\\Entity\\Cours',
        ]);
    }
}
