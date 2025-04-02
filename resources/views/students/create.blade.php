@extends('students.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm sinh viên</h3>
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
                    
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Mã sinh viên</strong>
                                    <input type="text" name="MaSV" class="form-control" placeholder="Nhập mã sinh viên">
                                </div>
                                <div class="form-group">
                                    <strong>Họ và tên</strong>
                                    <input type="text" name="TenSV" class="form-control" placeholder="Nhập họ tên">
                                </div>
                                <div class="form-group">
                                    <strong>Ngày sinh</strong>
                                    <input type="date" name="NgaySinh" class="form-control">
                                </div>

                                <div class="form-group">
                                    <strong>Địa chỉ</strong>
                                    <input type="text" name="DiaChi" class="form-control" placeholder="Nhập địa chỉ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Giới tính</strong>
                                    <select name="GioiTinh" class="form-select">
                                        <option selected>Chọn giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <strong>Số điện thoại</strong>
                                    <input type="text" name="SDT" class="form-control" placeholder="Nhập số điện thoại">
                                </div>

                                <div class="form-group">
                                    <strong>Phân quyền</strong>
                                    <select name="Role" class="form-select">
                                        <option selected>Chọn quyền</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Student">Student</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <strong>Mật khẩu</strong>
                                    <input type="text" name="Password" class="form-control" placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Save</button>
                    </form>
                </div>

@endsection