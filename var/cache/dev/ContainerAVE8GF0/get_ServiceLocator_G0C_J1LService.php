<?php

namespace ContainerAVE8GF0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G0C_J1LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g0C.J1L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g0C.J1L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'registry' => ['services', 'doctrine', 'getDoctrineService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'registry' => '?',
            'slugger' => '?',
        ]);
    }
}
