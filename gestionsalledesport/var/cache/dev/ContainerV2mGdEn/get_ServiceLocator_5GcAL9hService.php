<?php

namespace ContainerV2mGdEn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5GcAL9hService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5GcAL9h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5GcAL9h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cour' => ['privates', '.errored..service_locator.5GcAL9h.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.5GcAL9h": it references class "App\\Entity\\Cours" but no such service exists.'],
            'coursRepository' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService', true],
        ], [
            'cour' => 'App\\Entity\\Cours',
            'coursRepository' => 'App\\Repository\\CoursRepository',
        ]);
    }
}
