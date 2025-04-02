<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class student_manage extends Model
{
    use HasFactory;

    protected $table = 'student_manages';
    protected $fillable =
    [
        'MaSV',
        'TenSV',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'SDT',
        'Password',
        'Role'
    ];
}
