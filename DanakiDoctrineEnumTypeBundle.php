<?php

namespace Danaki\DoctrineEnumTypeBundle;

use Acelaya\Doctrine\Type\PhpEnumType;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DanakiDoctrineEnumTypeBundle extends Bundle
{
    public function boot()
    {
        PhpEnumType::registerEnumTypes($this->container->getParameter('danaki_doctrine_enum_type.types'));
    }
}
