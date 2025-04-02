<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use App\Models\student_manage;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService) 
    {
        $this->userService = $userService;
    }

    public function showLogin()
    {
        return view('auth.login');
    }    

    public function showRegister()
    {
        return view('auth.register');
    }

    public function handleLogin(Request $request)
    {
        $request ->validate(
            [
                'MaSV' => 'required|string|max:15',
                'Password' => 'required|string|max:255'
            ]
        );

        $MaSV = student_manage::Where('MaSV', $request->MaSV)->first();
        $Password = student_manage::Where('Password', $request->Password);

        if ($MaSV && $Password) {
            return redirect()->route('students.index');
        }

        return redirect()->route('auth.login');
    }

    public function handleRegister(Request $request)
    {
        $MaSV = $request->get('MaSV');
        $TenSV = $request->get('TenSV');
        $NgaySinh = $request->get('NgaySinh');
        $GioiTinh = $request->get('GioiTinh');
        $DiaChi = $request->get('DiaChi');
        $SDT = $request->get('SDT');
        $Password = $request->get('Password');

        $data = [
            'MaSV' => $MaSV,
            'TenSV' => $TenSV,
            'NgaySinh' => $NgaySinh,
            'GioiTinh' => $GioiTinh,
            'DiaChi' => $DiaChi,
            'SDT' => $SDT,
            'Password' => $Password
        ];

        $this->userService->register($data);
        return redirect()->route('auth.login');
    }
}
