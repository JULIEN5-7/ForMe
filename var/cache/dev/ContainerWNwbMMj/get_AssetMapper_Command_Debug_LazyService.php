<?php

namespace ContainerWNwbMMj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Command_Debug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.asset_mapper.command.debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.asset_mapper.command.debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:asset-map', [], 'Output all mapped assets', false, #[\Closure(name: 'asset_mapper.command.debug', class: 'Symfony\\Component\\AssetMapper\\Command\\DebugAssetMapperCommand')] fn (): \Symfony\Component\AssetMapper\Command\DebugAssetMapperCommand => ($container->privates['asset_mapper.command.debug'] ?? $container->load('getAssetMapper_Command_DebugService')));
    }
}
