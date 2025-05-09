<?php

namespace ContainerDOTucxF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9cO_NmoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9cO.Nmo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9cO.Nmo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'specialite' => ['privates', '.errored..service_locator.9cO.Nmo.App\\Entity\\Specialites', NULL, 'Cannot autowire service ".service_locator.9cO.Nmo": it needs an instance of "App\\Entity\\Specialites" but this type has been excluded in "config/services.yaml".'],
        ], [
            'specialite' => 'App\\Entity\\Specialites',
        ]);
    }
}
