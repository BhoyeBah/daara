<?php

namespace ContainerAq9Kqjs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fvw2iuGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fvw2iuG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fvw2iuG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'dahira' => ['privates', '.errored..service_locator.fvw2iuG.App\\Entity\\Dahiras', NULL, 'Cannot autowire service ".service_locator.fvw2iuG": it needs an instance of "App\\Entity\\Dahiras" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'dahira' => 'App\\Entity\\Dahiras',
            'entityManager' => '?',
        ]);
    }
}
