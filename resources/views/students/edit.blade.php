@extends('students.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('students.index') }}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body">
                    @if (Session::has('thongbao'))
                        <div class="alert alert-success">{{ Session::get('thongbao') }}</div>
                    @endif
                    
                    <form action="{{ route('students.update', $student->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Mã sinh viên</strong>
                                    <input type="text" name="MaSV" value="{{ $student->MaSV}}" class="form-control"
                                        placeholder="Nhập mã sinh viên">
                                </div>
                                <div class="form-group">
                                    <strong>Họ và tên</strong>
                                    <input type="text" name="TenSV" value="{{ $student->TenSV}}" class="form-control"
                                        placeholder="Nhập họ tên">
                                </div>
                                <div class="form-group">
                                    <strong>Ngày sinh</strong>
                                    <input type="date" name="NgaySinh" value="{{ $student->NgaySinh}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Giới tính</strong>
                                    <select name="GioiTinh" class="form-select">
                                        <option selected>Chọn giới tính</option>
                                        <option value="Nam" {{ $student->GioiTinh == "Nam" ? 'selected' : ''}}>Nam</option>
                                        <option value="Nữ" {{ $student->GioiTinh == "Nữ" ? 'selected' : ''}}>Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <strong>Địa chỉ</strong>
                                    <input type="text" name="DiaChi" value="{{ $student->DiaChi }}" class="form-control"
                                        placeholder="Nhập địa chỉ">
                                </div>
                                <div class="form-group">
                                    <strong>Số điện thoại</strong>
                                    <input type="text" name="SDT" value="{{ $student->SDT }}" class="form-control"
                                        placeholder="Nhập số điện thoại">
                                </div>

                                <div class="form-group">
                                    <strong>Phân quyền</strong>
                                    <select name="Role" class="form-select" @readonly(true)>
                                        <option selected>Chọn quyền</option>
                                        <option value="Admin" {{ $student->Role == "Admin" ? 'selected' : ''}}>Admin</option>
                                        <option value="Student" {{ $student->Role == "Student" ? 'selected' : ''}}>Student</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                    </form>
                </div>

@endsection