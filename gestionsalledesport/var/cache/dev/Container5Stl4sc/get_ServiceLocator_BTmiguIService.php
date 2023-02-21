<?php

namespace Container5Stl4sc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BTmiguIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BTmiguI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BTmiguI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coursR' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService', true],
        ], [
            'coursR' => 'App\\Repository\\CoursRepository',
        ]);
    }
}
