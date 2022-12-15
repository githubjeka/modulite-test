<?php
declare(strict_types=1);

namespace ModuleA;

final class User
{
    public function getName(): string
    {
        return __CLASS__;
    }
}