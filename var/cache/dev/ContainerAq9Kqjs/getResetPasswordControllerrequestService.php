<?php

namespace ContainerAq9Kqjs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordControllerrequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D.nMOje.App\Controller\ResetPasswordController::request()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D.nMOje.App\\Controller\\ResetPasswordController::request()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'mailer' => '?',
            'translator' => '?',
        ]))->withContext('App\\Controller\\ResetPasswordController::request()', $container);
    }
}
