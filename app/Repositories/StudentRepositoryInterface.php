<?php
namespace App\Repositories;

interface StudentRepositoryInterface{
    public function all();
    public function find($MaSV);
    public function create(array $data);
    public function update($MaSV, array $data);
    public function delete($MaSV);
}
?>