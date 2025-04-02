<?php

namespace App\Http\Controllers;

use App\Models\student_manage;
use App\Services\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(studentService $studentService)
    {
        $this-> studentService = $studentService;
    }

    public function index()
    {
        $students = $this->studentService->getAllStudent();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
        [
            'MaSV' => 'required|string|max:15',
            'TenSV' => 'required|string|max:255',
            'NgaySinh' => 'required|date',
            'GioiTinh' => 'required|string|max:10',
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|string|max:10',
            'Role' => 'required|string|max:10',
            'Password' => 'required|string|max:255'
        ]);

        $this->studentService->createStudent($data);
        return redirect()->route('students.index');
    }

    public function edit($MaSV)
    {
        $student = $this->studentService->getStudentById($MaSV);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $MaSV)
    {
        $data = $request->validate(
        [
            'MaSV' => 'required|string|max:15',
            'TenSV' => 'required|string|max:255',
            'NgaySinh' => 'required|date',
            'DiaChi' => 'required|string|max:255',
            'GioiTinh' => 'required|string|max:10',
            'SDT' => 'required|string|max:10',
            'Role' => 'required|string|max:10'
        ]);        

        $user = Auth::user();

        $requestedRole = $data['Role'];
    
        if ($user && $user->Role !== 'admin' && $requestedRole === 'admin') {
            return redirect()->route('students.edit', $MaSV)->with('thongbao', 'Ban khong co quyen dat vai tro nay!');
        }

        $this->studentService->updateStudent($MaSV, $data);
        return redirect()->route('students.index');
    }

    public function destroy($MaSV)
    {
        $user = Auth::user();

        if($user && $user->Role !== 'admin')
        {
            return redirect()->route('students.index')->with('thongbao', 'Ban khong co quyen de xoa nguoi dung!');
        }

        $student = student_manage::find($MaSV);

        if($student)
        {
            $student->delete();
            return redirect()->route('students.index')->with('thongbao', 'Xoa thanh cong!');
        }

        return redirect()->route('students.index')->with('thongbao','Khong tim thay nguoi dung!');
    }
}
