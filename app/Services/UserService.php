<?php
namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function find($MaSV)
    {
        return $this->userRepository->find($MaSV);
    }

    public function register(array $data)
    {
        return $this->userRepository->create($data);
    }

    public function login($MaSV)
    {
        $student = $this->userRepository->find($MaSV);

        if ($student)
        {
            return $student;
        }

        return null;
    }
    
    public function update($MaSV, array $data)
    {
        $student = $this->userRepository->find($MaSV);
        return $student->update($data);
    }
}
?>