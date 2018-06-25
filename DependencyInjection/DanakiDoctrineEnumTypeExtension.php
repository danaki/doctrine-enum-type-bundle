<?php

namespace Danaki\DoctrineEnumTypeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;
use Acelaya\Doctrine\Type\PhpEnumType;

class DanakiDoctrineEnumTypeExtension extends ConfigurableExtension
{
    protected function loadInternal(array $config, ContainerBuilder $container)
    {
		PhpEnumType::registerEnumTypes($config['types']);
    }
}
