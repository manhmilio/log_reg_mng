<?php
namespace App\Repositories;
use App\Models\student_manage;
use Illuminate\Support\Arr;

class StudentRepository implements StudentRepositoryInterface
{
    protected $model;
    
    public function __construct(student_manage $students)
    {
        $this->model = $students;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($MaSV)
    {
        return $this->model->find($MaSV);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($MaSV, array $data)
    {
        $student = $this->model->find($MaSV);
        return $student->update($data);
    }

    public function delete($MaSV)
    {
        $student = $this->model->find($MaSV);
        return $student->delete();
    }
}
?>