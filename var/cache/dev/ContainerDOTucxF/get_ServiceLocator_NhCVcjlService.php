<?php

namespace ContainerDOTucxF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NhCVcjlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NhCVcjl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NhCVcjl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'membre' => ['privates', '.errored..service_locator.NhCVcjl.App\\Entity\\Membres', NULL, 'Cannot autowire service ".service_locator.NhCVcjl": it needs an instance of "App\\Entity\\Membres" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'membre' => 'App\\Entity\\Membres',
        ]);
    }
}
