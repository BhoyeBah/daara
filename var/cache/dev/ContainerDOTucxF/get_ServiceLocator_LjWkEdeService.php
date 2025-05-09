<?php

namespace ContainerDOTucxF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LjWkEdeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LjWkEde' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LjWkEde'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'dahira' => ['privates', '.errored..service_locator.LjWkEde.App\\Entity\\Dahiras', NULL, 'Cannot autowire service ".service_locator.LjWkEde": it needs an instance of "App\\Entity\\Dahiras" but this type has been excluded in "config/services.yaml".'],
        ], [
            'dahira' => 'App\\Entity\\Dahiras',
        ]);
    }
}
