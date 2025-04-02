<?php
namespace App\Repositories;

interface UserRepositoryInterface
{
    public function find($MaSV);
    public function create(array $data);
    public function update($MaSV, array $data);
}
?>