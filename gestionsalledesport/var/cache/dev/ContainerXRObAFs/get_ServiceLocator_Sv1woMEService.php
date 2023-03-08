<?php

namespace ContainerXRObAFs;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sv1woMEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Sv1woME' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Sv1woME'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blog' => ['privates', '.errored..service_locator.Sv1woME.App\\Entity\\Blog', NULL, 'Cannot autowire service ".service_locator.Sv1woME": it references class "App\\Entity\\Blog" but no such service exists.'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'blog' => 'App\\Entity\\Blog',
            'doctrine' => '?',
        ]);
    }
}
