<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserRequest;
use App\Http\Requests\Api\UserSearchRequest;
use App\Services\Api\User\UserService;
use App\Services\Testing\TestingService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;
    private $testingService;

    public function __construct(UserService $userService, TestingService $testingService)
    {
        $this->userService = $userService;
        $this->testingService = $testingService;
    }
    public function all(UserSearchRequest $userSearchRequest)
    {
        return $this->userService->all($userSearchRequest);
    }
    public function tes()
    {
        return $this->testingService->tes();
    }


    // public function store(UserRequest $request)
    // {
    //     return $this->userService->create($request->validated());
    // }

    // public function show($id)
    // {
    //     return $this->userService->find($id);
    // }

    // public function update(UserRequest $request, $id)
    // {
    //     return $this->userService->update($id, $request->validated());
    // }

    // public function destroy($id)
    // {
    //     return $this->userService->delete($id);
    // }
}
