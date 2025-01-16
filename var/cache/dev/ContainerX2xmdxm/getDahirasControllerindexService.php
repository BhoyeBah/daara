<?php

namespace ContainerX2xmdxm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDahirasControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Dy2gcLh.App\Controller\DahirasController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Dy2gcLh.App\\Controller\\DahirasController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'dahirasRepository' => ['privates', 'App\\Repository\\DahirasRepository', 'getDahirasRepositoryService', true],
        ], [
            'dahirasRepository' => 'App\\Repository\\DahirasRepository',
        ]))->withContext('App\\Controller\\DahirasController::index()', $container);
    }
}
