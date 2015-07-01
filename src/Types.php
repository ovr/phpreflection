<?php

namespace Ovr\PHPReflection;

class Types
{
    const INT_TYPE = 1 << 1;

    const DOUBLE_TYPE = 1 << 2;

    const STRING_TYPE = 1 << 3;

    const NUMBER = self::INT_TYPE | self::DOUBLE_TYPE;

    const BOOLEAN_TYPE = 1 << 4;

    const ARRAY_TYPE = 1 << 5;

    const RESOURCE_TYPE = 1 << 6;

    const OBJECT_TYPE = 1 << 7;

    const VOID_TYPE = -1;

    const UNKNOWN_TYPE = -2;

    const MIXED = self::INT_TYPE | self::DOUBLE_TYPE | self::STRING_TYPE | self::BOOLEAN_TYPE | self::ARRAY_TYPE | self::RESOURCE_TYPE | self::OBJECT_TYPE;
}
