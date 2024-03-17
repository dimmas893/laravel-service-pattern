<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserRequest;
use App\Http\Requests\Api\UserSearchRequest;
use App\Services\Api\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    // public function findByEmail($email) // Tambahkan parameter $email di sini
    // {
    //     $result = $this->userService->getByEmail($email);
    //     return response()->json($result);
    // }
    public function all(UserSearchRequest $userSearchRequest)
    {
        // return 'dsd'; // Hapus atau komentari baris ini
        // $request = $userSearchRequest->validated();
        return $this->userService->all($userSearchRequest);
    }


    public function store(UserRequest $request)
    {
        return $this->userService->create($request->validated());
    }

    public function show($id)
    {
        return $this->userService->find($id);
    }

    public function update(UserRequest $request, $id)
    {
        return $this->userService->update($id, $request->validated());
    }

    public function destroy($id)
    {
        return $this->userService->delete($id);
    }
}
