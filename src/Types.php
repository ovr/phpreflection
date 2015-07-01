<?php

namespace Ovr\PHPReflection;

class Types
{
    const INT_TYPE = 1;

    const DOUBLE_TYPE = 2;

    const STRING_TYPE = 3;

    const NUMBER = self::INT_TYPE | self::DOUBLE_TYPE;

    const BOOLEAN_TYPE = 4;

    const ARRAY_TYPE = 5;

    const RESOURCE_TYPE = 6;

    const OBJECT_TYPE = 7;

    const VOID_TYPE = 8;

    const MIXED = self::INT_TYPE | self::DOUBLE_TYPE | self::STRING_TYPE | self::BOOLEAN_TYPE;
}
