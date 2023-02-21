<?php

namespace Container8m6Sw6Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AVAzy3yService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aVAzy3y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aVAzy3y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BlogController::details' => ['privates', '.service_locator.8af4n9B', 'get_ServiceLocator_8af4n9BService', true],
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator.8af4n9B', 'get_ServiceLocator_8af4n9BService', true],
            'App\\Controller\\BlogadminController::addblogadmin' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogadminController::afficheblogadmin' => ['privates', '.service_locator.8af4n9B', 'get_ServiceLocator_8af4n9BService', true],
            'App\\Controller\\BlogadminController::deleteblog' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogadminController::listBlog' => ['privates', '.service_locator.8af4n9B', 'get_ServiceLocator_8af4n9BService', true],
            'App\\Controller\\BlogadminController::updateblog' => ['privates', '.service_locator.Sv1woME', 'get_ServiceLocator_Sv1woMEService', true],
            'App\\Controller\\CoachController::afficheall' => ['privates', '.service_locator.RNsiPAw', 'get_ServiceLocator_RNsiPAwService', true],
            'App\\Controller\\CoachController::ajouter' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\CoachController::index' => ['privates', '.service_locator.RNsiPAw', 'get_ServiceLocator_RNsiPAwService', true],
            'App\\Controller\\CoachController::modifier' => ['privates', '.service_locator.MFTThrR', 'get_ServiceLocator_MFTThrRService', true],
            'App\\Controller\\CoachController::show' => ['privates', '.service_locator.mU0Qlfy', 'get_ServiceLocator_MU0QlfyService', true],
            'App\\Controller\\CoachController::supprimerS' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\CoursController::afficheall' => ['privates', '.service_locator.BTmiguI', 'get_ServiceLocator_BTmiguIService', true],
            'App\\Controller\\CoursController::ajouter' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\CoursController::modifier' => ['privates', '.service_locator.KnEtaVd', 'get_ServiceLocator_KnEtaVdService', true],
            'App\\Controller\\CoursController::show' => ['privates', '.service_locator.BTmiguI', 'get_ServiceLocator_BTmiguIService', true],
            'App\\Controller\\CoursController::supprimerS' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\MemberController::ajouter' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\MemberController::index' => ['privates', '.service_locator.piBqT07', 'get_ServiceLocator_PiBqT07Service', true],
            'App\\Controller\\MemberController::modifier' => ['privates', '.service_locator.OqrPwRa', 'get_ServiceLocator_OqrPwRaService', true],
            'App\\Controller\\MemberController::supprimerS' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ProduitController::addprod' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ProduitController::afficheall' => ['privates', '.service_locator.LBR_NgI', 'get_ServiceLocator_LBRNgIService', true],
            'App\\Controller\\ProduitController::modifier' => ['privates', '.service_locator.4.KNUn1', 'get_ServiceLocator_4_KNUn1Service', true],
            'App\\Controller\\ProduitController::supprimerp' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\BlogController:details' => ['privates', '.service_locator.8af4n9B', 'get_ServiceLocator_8af4n9BService', true],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator.8af4n9B', 'get_ServiceLocator_8af4n9BService', true],
            'App\\Controller\\BlogadminController:addblogadmin' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogadminController:afficheblogadmin' => ['privates', '.service_locator.8af4n9B', 'get_ServiceLocator_8af4n9BService', true],
            'App\\Controller\\BlogadminController:deleteblog' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BlogadminController:listBlog' => ['privates', '.service_locator.8af4n9B', 'get_ServiceLocator_8af4n9BService', true],
            'App\\Controller\\BlogadminController:updateblog' => ['privates', '.service_locator.Sv1woME', 'get_ServiceLocator_Sv1woMEService', true],
            'App\\Controller\\CoachController:afficheall' => ['privates', '.service_locator.RNsiPAw', 'get_ServiceLocator_RNsiPAwService', true],
            'App\\Controller\\CoachController:ajouter' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\CoachController:index' => ['privates', '.service_locator.RNsiPAw', 'get_ServiceLocator_RNsiPAwService', true],
            'App\\Controller\\CoachController:modifier' => ['privates', '.service_locator.MFTThrR', 'get_ServiceLocator_MFTThrRService', true],
            'App\\Controller\\CoachController:show' => ['privates', '.service_locator.mU0Qlfy', 'get_ServiceLocator_MU0QlfyService', true],
            'App\\Controller\\CoachController:supprimerS' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\CoursController:afficheall' => ['privates', '.service_locator.BTmiguI', 'get_ServiceLocator_BTmiguIService', true],
            'App\\Controller\\CoursController:ajouter' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\CoursController:modifier' => ['privates', '.service_locator.KnEtaVd', 'get_ServiceLocator_KnEtaVdService', true],
            'App\\Controller\\CoursController:show' => ['privates', '.service_locator.BTmiguI', 'get_ServiceLocator_BTmiguIService', true],
            'App\\Controller\\CoursController:supprimerS' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\MemberController:ajouter' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\MemberController:index' => ['privates', '.service_locator.piBqT07', 'get_ServiceLocator_PiBqT07Service', true],
            'App\\Controller\\MemberController:modifier' => ['privates', '.service_locator.OqrPwRa', 'get_ServiceLocator_OqrPwRaService', true],
            'App\\Controller\\MemberController:supprimerS' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ProduitController:addprod' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ProduitController:afficheall' => ['privates', '.service_locator.LBR_NgI', 'get_ServiceLocator_LBRNgIService', true],
            'App\\Controller\\ProduitController:modifier' => ['privates', '.service_locator.4.KNUn1', 'get_ServiceLocator_4_KNUn1Service', true],
            'App\\Controller\\ProduitController:supprimerp' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\BlogController::details' => '?',
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogadminController::addblogadmin' => '?',
            'App\\Controller\\BlogadminController::afficheblogadmin' => '?',
            'App\\Controller\\BlogadminController::deleteblog' => '?',
            'App\\Controller\\BlogadminController::listBlog' => '?',
            'App\\Controller\\BlogadminController::updateblog' => '?',
            'App\\Controller\\CoachController::afficheall' => '?',
            'App\\Controller\\CoachController::ajouter' => '?',
            'App\\Controller\\CoachController::index' => '?',
            'App\\Controller\\CoachController::modifier' => '?',
            'App\\Controller\\CoachController::show' => '?',
            'App\\Controller\\CoachController::supprimerS' => '?',
            'App\\Controller\\CoursController::afficheall' => '?',
            'App\\Controller\\CoursController::ajouter' => '?',
            'App\\Controller\\CoursController::modifier' => '?',
            'App\\Controller\\CoursController::show' => '?',
            'App\\Controller\\CoursController::supprimerS' => '?',
            'App\\Controller\\MemberController::ajouter' => '?',
            'App\\Controller\\MemberController::index' => '?',
            'App\\Controller\\MemberController::modifier' => '?',
            'App\\Controller\\MemberController::supprimerS' => '?',
            'App\\Controller\\ProduitController::addprod' => '?',
            'App\\Controller\\ProduitController::afficheall' => '?',
            'App\\Controller\\ProduitController::modifier' => '?',
            'App\\Controller\\ProduitController::supprimerp' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BlogController:details' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogadminController:addblogadmin' => '?',
            'App\\Controller\\BlogadminController:afficheblogadmin' => '?',
            'App\\Controller\\BlogadminController:deleteblog' => '?',
            'App\\Controller\\BlogadminController:listBlog' => '?',
            'App\\Controller\\BlogadminController:updateblog' => '?',
            'App\\Controller\\CoachController:afficheall' => '?',
            'App\\Controller\\CoachController:ajouter' => '?',
            'App\\Controller\\CoachController:index' => '?',
            'App\\Controller\\CoachController:modifier' => '?',
            'App\\Controller\\CoachController:show' => '?',
            'App\\Controller\\CoachController:supprimerS' => '?',
            'App\\Controller\\CoursController:afficheall' => '?',
            'App\\Controller\\CoursController:ajouter' => '?',
            'App\\Controller\\CoursController:modifier' => '?',
            'App\\Controller\\CoursController:show' => '?',
            'App\\Controller\\CoursController:supprimerS' => '?',
            'App\\Controller\\MemberController:ajouter' => '?',
            'App\\Controller\\MemberController:index' => '?',
            'App\\Controller\\MemberController:modifier' => '?',
            'App\\Controller\\MemberController:supprimerS' => '?',
            'App\\Controller\\ProduitController:addprod' => '?',
            'App\\Controller\\ProduitController:afficheall' => '?',
            'App\\Controller\\ProduitController:modifier' => '?',
            'App\\Controller\\ProduitController:supprimerp' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
