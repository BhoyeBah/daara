<?php

namespace ContainerX2xmdxm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSpecialitesControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g0Pmaam.App\Controller\SpecialitesController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g0Pmaam.App\\Controller\\SpecialitesController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'specialite' => ['privates', '.errored..service_locator.g0Pmaam.App\\Entity\\Specialites', NULL, 'Cannot autowire service ".service_locator.g0Pmaam": it needs an instance of "App\\Entity\\Specialites" but this type has been excluded in "config/services.yaml".'],
        ], [
            'specialite' => 'App\\Entity\\Specialites',
        ]))->withContext('App\\Controller\\SpecialitesController::show()', $container);
    }
}
