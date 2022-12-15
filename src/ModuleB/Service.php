<?php
declare(strict_types=1);

namespace ModuleB;

use ModuleA\User;

class Service
{
    public function getUser() : User {
        return new User();
    }
}