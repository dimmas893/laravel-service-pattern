<?php

namespace App\Services\Api\User;

use LaravelEasyRepository\BaseService;

interface UserService extends BaseService{

    public function all($request);
}
