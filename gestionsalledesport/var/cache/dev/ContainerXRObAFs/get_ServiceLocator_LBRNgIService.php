<?php

namespace ContainerXRObAFs;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LBRNgIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LBR_NgI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LBR_NgI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produitR' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'produitR' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
