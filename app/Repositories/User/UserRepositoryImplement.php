<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\User;

class UserRepositoryImplement extends Eloquent implements UserRepository{

    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function all($perPage = null, $filter = null)
    {
        // Mulai dengan query dasar
        $query = $this->model->query();

        // Filter data jika filter tidak kosong
        if (!empty($filter)) {
            $query->where('name', 'like', '%' . $filter . '%')
                  ->orWhere('email', 'like', '%' . $filter . '%');
        }
        // Lakukan pagination
        $data = $query->paginate($perPage);

        return $data;
    }


    // Write something awesome :)
}
