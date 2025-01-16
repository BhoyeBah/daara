<?php

namespace ContainerX2xmdxm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jj2911mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jj2911m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jj2911m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'membre' => ['privates', '.errored..service_locator.Jj2911m.App\\Entity\\Membres', NULL, 'Cannot autowire service ".service_locator.Jj2911m": it needs an instance of "App\\Entity\\Membres" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'membre' => 'App\\Entity\\Membres',
            'entityManager' => '?',
        ]);
    }
}
