<?php
// Pastikan namespace sesuai dengan path file
namespace App\Repositories\User;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

// Implementasi interface UserRepository
class UserRepositoryImplement extends Eloquent implements UserRepository
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }


public function all($perPage = null, $filter = null, $page = null)
{
    try {
        // Membuat kunci unik berdasarkan parameter yang diberikan
        $cacheKey = 'users.all.' . $perPage . '.' . $filter . '.' . $page;

        // Mengecek apakah data sudah ada di cache
        if (Cache::has($cacheKey)) {
            // Mengambil data dari cache
            return Cache::get($cacheKey);
        }

        // Jika data belum ada di cache, lakukan query ke database
        $query = $this->model->query();

        // Filter data jika filter tidak kosong
        if (!empty($filter)) {
            $query->where('name', 'like', '%' . $filter . '%')
                  ->orWhere('email', 'like', '%' . $filter . '%');
        }
        // Lakukan pagination
        $data = $query->paginate($perPage);

        // Menyimpan data ke dalam cache dengan waktu kadaluarsa 60 menit (opsional)
        Cache::put($cacheKey, $data, now()->addMinutes(60));
        return $data;
    } catch (\Exception $exception) {
        // Tangani error
        return ['message' => 'Error occurred while fetching data'];
    }
}

}
