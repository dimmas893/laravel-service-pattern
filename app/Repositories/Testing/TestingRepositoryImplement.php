<?php

namespace App\Repositories\Testing;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Testing;

class TestingRepositoryImplement extends Eloquent implements TestingRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    // protected $model;

    // public function __construct(Testing $model)
    // {
    //     $this->model = $model;
    // }
        public function tes(){
            return 'ini tes berhasil';
        }
    // Write something awesome :)
}
