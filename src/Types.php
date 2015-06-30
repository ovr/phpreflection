<?php

namespace Ovr\PHPReflection;

class Types
{
    const INT_TYPE = 1;

    const DOUBLE_TYPE = 2;

    const STRING_TYPE = 3;

    const BOOLEAN_TYPE = 4;

    const MIXED = self::INT_TYPE || self::DOUBLE_TYPE || self::STRING_TYPE || self::BOOLEAN_TYPE;
}
