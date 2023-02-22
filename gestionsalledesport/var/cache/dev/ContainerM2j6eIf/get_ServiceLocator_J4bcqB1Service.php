<?php

namespace ContainerM2j6eIf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J4bcqB1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j4bcqB1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j4bcqB1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'res' => ['privates', '.errored..service_locator.j4bcqB1.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.j4bcqB1": it references class "App\\Entity\\Reservation" but no such service exists.'],
        ], [
            'doctrine' => '?',
            'res' => 'App\\Entity\\Reservation',
        ]);
    }
}
