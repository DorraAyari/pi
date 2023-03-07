<?php

namespace ContainerVZzixbO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4_KNUn1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4.KNUn1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4.KNUn1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'produit' => ['privates', '.errored..service_locator.4.KNUn1.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.4.KNUn1": it references class "App\\Entity\\Produit" but no such service exists.'],
        ], [
            'doctrine' => '?',
            'produit' => 'App\\Entity\\Produit',
        ]);
    }
}
