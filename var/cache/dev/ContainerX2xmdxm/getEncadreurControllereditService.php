<?php

namespace ContainerX2xmdxm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEncadreurControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q_9eqzw.App\Controller\EncadreurController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.Q_9eqzw'] ?? $container->load('get_ServiceLocator_Q9eqzwService'));

        if (isset($container->privates['.service_locator.Q_9eqzw.App\\Controller\\EncadreurController::edit()'])) {
            return $container->privates['.service_locator.Q_9eqzw.App\\Controller\\EncadreurController::edit()'];
        }

        return $container->privates['.service_locator.Q_9eqzw.App\\Controller\\EncadreurController::edit()'] = $a->withContext('App\\Controller\\EncadreurController::edit()', $container);
    }
}
