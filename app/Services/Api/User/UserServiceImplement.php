<?php

namespace App\Services\Api\User;

use App\Repositories\User\UserRepository;
use LaravelEasyRepository\ServiceApi;

class UserServiceImplement extends ServiceApi implements UserService
{
    protected $title = "";
    protected $create_message = "";
    protected $update_message = "";
    protected $delete_message = "";

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function all($request)
    {
        $perPage = $request->input('perPage');
        $filter = $request->input('filter');
        $page = $request->input('page');

        return $this->mainRepository->all($perPage, $filter, $page);
    }
    // Define your custom methods :)
}
