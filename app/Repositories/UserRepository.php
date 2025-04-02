<?php
namespace App\Repositories;

use App\Models\student_manage;
use App\Repositories;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(student_manage $students) {
        $this->model = $students;
    }

    public function find($MaSV)
    {
        return $this->model->where('MaSV', $MaSV)->first();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($MaSV, array $data)
    {
        $student = $this->find($MaSV);
        
        return $student->update($data);
    }
}
?>