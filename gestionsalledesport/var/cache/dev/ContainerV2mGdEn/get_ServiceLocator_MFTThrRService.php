<?php

namespace ContainerV2mGdEn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MFTThrRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MFTThrR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MFTThrR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coach' => ['privates', '.errored..service_locator.MFTThrR.App\\Entity\\Coach', NULL, 'Cannot autowire service ".service_locator.MFTThrR": it references class "App\\Entity\\Coach" but no such service exists.'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'coach' => 'App\\Entity\\Coach',
            'doctrine' => '?',
        ]);
    }
}
