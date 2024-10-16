<?php

namespace ContainerFJ5xcZh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEncadreurControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.50_YF0x.App\Controller\EncadreurController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.50_YF0x.App\\Controller\\EncadreurController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'encadreurRepository' => ['privates', 'App\\Repository\\EncadreurRepository', 'getEncadreurRepositoryService', true],
        ], [
            'encadreurRepository' => 'App\\Repository\\EncadreurRepository',
        ]))->withContext('App\\Controller\\EncadreurController::index()', $container);
    }
}
