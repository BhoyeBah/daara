<?php

namespace ContainerAq9Kqjs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDahirasControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fvw2iuG.App\Controller\DahirasController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.fvw2iuG'] ?? $container->load('get_ServiceLocator_Fvw2iuGService'));

        if (isset($container->privates['.service_locator.fvw2iuG.App\\Controller\\DahirasController::edit()'])) {
            return $container->privates['.service_locator.fvw2iuG.App\\Controller\\DahirasController::edit()'];
        }

        return $container->privates['.service_locator.fvw2iuG.App\\Controller\\DahirasController::edit()'] = $a->withContext('App\\Controller\\DahirasController::edit()', $container);
    }
}
