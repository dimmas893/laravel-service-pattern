<?php

namespace App\Services\Testing;

use LaravelEasyRepository\Service;
use App\Repositories\Testing\TestingRepository;

class TestingServiceImplement extends Service implements TestingService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(TestingRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }
    public function tes(){
        return $this->mainRepository->tes();
    }
}
