<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Repository;

interface UserRepository extends Repository{
    public function all($perPage, $filter, $page);
    // public function tes();
}
