<?php

namespace Danaki\DoctrineEnumTypeBundle;

use Acelaya\Doctrine\Type\PhpEnumType;
use Doctrine\DBAL\Types\Type;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DanakiDoctrineEnumTypeBundle extends Bundle
{
    public function boot()
    {

        foreach ($this->container->getParameter('danaki_doctrine_enum_type.types') as $typeName => $enumClass) {
            $typeName = \is_string($typeName) ? $typeName : $enumClass;
            if (! Type::hasType($typeName)) {
                PhpEnumType::registerEnumType($typeName, $enumClass);
            }
        }
    }
}
