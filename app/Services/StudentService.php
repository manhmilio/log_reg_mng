<?php
namespace App\Services;

use App\Repositories\StudentRepository;

class StudentService
{
    protected $studentRepository;

    public function __construct(StudentRepository $student) {
        $this->studentRepository = $student;
    }

    public function getAllStudent()
    {
        return $this->studentRepository->all();
    }

    public function getStudentById($MaSV)
    {
        return $this->studentRepository->find($MaSV);
    }

    public function createStudent(array $data)
    {
        return $this->studentRepository->create($data);
    }

    public function updateStudent($MaSV, array $data)
    {
        return $this->studentRepository->update($MaSV, $data);
    }

    public function deleteStudentById($MaSV)
    {
        return $this->studentRepository->delete($MaSV);
    }
}
?>