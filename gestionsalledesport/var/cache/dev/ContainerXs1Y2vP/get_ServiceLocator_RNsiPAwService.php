<?php

namespace ContainerXs1Y2vP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RNsiPAwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RNsiPAw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RNsiPAw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coachRepository' => ['privates', 'App\\Repository\\CoachRepository', 'getCoachRepositoryService', true],
        ], [
            'coachRepository' => 'App\\Repository\\CoachRepository',
        ]);
    }
}
