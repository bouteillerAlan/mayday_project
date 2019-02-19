<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\Admin\\AdminAuthenticationController::login' => ['privates', '.service_locator.IcpmA2_', 'get_ServiceLocator_IcpmA2Service.php', true],
    'App\\Controller\\Admin\\AdminBlogController::delete' => ['privates', '.service_locator.A3P0lzd', 'get_ServiceLocator_A3P0lzdService.php', true],
    'App\\Controller\\Admin\\AdminBlogController::edit' => ['privates', '.service_locator.A3P0lzd', 'get_ServiceLocator_A3P0lzdService.php', true],
    'App\\Controller\\Admin\\AdminUserController::delete' => ['privates', '.service_locator.vAywuIp', 'get_ServiceLocator_VAywuIpService.php', true],
    'App\\Controller\\BlogController::unique' => ['privates', '.service_locator.A3P0lzd', 'get_ServiceLocator_A3P0lzdService.php', true],
    'App\\Controller\\Admin\\AdminAuthenticationController:login' => ['privates', '.service_locator.IcpmA2_', 'get_ServiceLocator_IcpmA2Service.php', true],
    'App\\Controller\\Admin\\AdminBlogController:delete' => ['privates', '.service_locator.A3P0lzd', 'get_ServiceLocator_A3P0lzdService.php', true],
    'App\\Controller\\Admin\\AdminBlogController:edit' => ['privates', '.service_locator.A3P0lzd', 'get_ServiceLocator_A3P0lzdService.php', true],
    'App\\Controller\\Admin\\AdminUserController:delete' => ['privates', '.service_locator.vAywuIp', 'get_ServiceLocator_VAywuIpService.php', true],
    'App\\Controller\\BlogController:unique' => ['privates', '.service_locator.A3P0lzd', 'get_ServiceLocator_A3P0lzdService.php', true],
])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
